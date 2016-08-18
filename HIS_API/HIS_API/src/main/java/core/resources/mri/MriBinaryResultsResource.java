package core.resources.mri;

import java.util.List;

import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

import org.codehaus.jettison.json.JSONException;
import org.codehaus.jettison.json.JSONObject;
import org.hibernate.Session;

import core.classes.mri.MriBinaryResults;
import core.classes.mri.MriLaboratory;
import core.classes.mri.MriTestParentFields;
import core.classes.mri.MriTestRequest;
import core.classes.mri.MriUser;
import flexjson.JSONSerializer;
import lib.SessionFactoryUtil;
import lib.driver.mri.driver_class.MriBinaryResultsDBDriver;
import lib.driver.mri.driver_class.MriTestRequestDBDriver;

@Path("MriBinaryResult")
public class MriBinaryResultsResource {
	MriBinaryResultsDBDriver binDbDriver = new MriBinaryResultsDBDriver();
	MriTestRequestDBDriver mriTestRequestDBDriver = new MriTestRequestDBDriver();
	
	@POST
	@Path("/getTestRequests/")
	@Produces(MediaType.APPLICATION_JSON)
	@Consumes(MediaType.APPLICATION_JSON)
	public String getTestRequests(JSONObject obj)
	{		
		System.out.println("get test request for result enter and rechack ");
		JSONSerializer serializer = new JSONSerializer();
		if(obj.has("start_date") && obj.has("end_date")) {
			try {
				return serializer.serialize(binDbDriver.GetTestRequestForPeriod(obj.getString("start_date"), obj.getString("end_date")));
			} catch (JSONException e) {
				e.printStackTrace();
				return null;
			}
		} 
		else if (obj.has("start_reqID") && obj.has("end_reqID")){
			try {
				
				String startrequestID=obj.getString("start_reqID").replaceAll("\\p{Z}","");
				int requestPrimaryKeyStart=mriTestRequestDBDriver.GetRequestPrimaryKeyByRequestID(startrequestID);
				
				String endrequestID=obj.getString("end_reqID").replaceAll("\\p{Z}","");
				int requestPrimaryKeyEnd=mriTestRequestDBDriver.GetRequestPrimaryKeyByRequestID(endrequestID);
				System.out.println("start_reqID:"+requestPrimaryKeyStart+"End ReqID"+requestPrimaryKeyEnd);
				
				return serializer.serialize(binDbDriver.GetTestForIDRangeResult(requestPrimaryKeyStart,requestPrimaryKeyEnd));
			} catch (JSONException e) {
				e.printStackTrace();
				return null;
			}
		}
		else {
	
			return serializer.serialize(binDbDriver.GetTestRequests());
		}
	}
	
	@POST
	@Path("/addSingleResult/")
	@Produces("text/plain")
	@Consumes(MediaType.APPLICATION_JSON)
	public String addSingleResult(JSONObject obj)
	{		
		System.out.println(" Results Stages SigleResults");
		Session session = SessionFactoryUtil.getSessionFactory().openSession();
		MriTestRequest req;
		MriBinaryResults bin = new MriBinaryResults(); 
		MriUser user =new MriUser();
		//Insert Result Status 1
		int Status=1;
		try {
			req = (MriTestRequest) session.load(MriTestRequest.class, obj.getInt("id"));
			bin.setMriTestRequest(req);
			bin.setResultValue(obj.getString("value"));
			user = (MriUser) session.load(MriUser.class, obj.getInt("result_by"));
			bin.setEnteredBy(user);
			
			bin.setResultComment(obj.getString("comment"));
			
			req.setStatus(Status);
			req.setComments(obj.getString("test_comment"));
			
			boolean res = binDbDriver.addSingleResult(bin);
			if(res)
				return "true";
		} catch (JSONException e) {
			e.printStackTrace();
		}
		return "false";
	}
	
	@POST
	@Path("/updateSingleResult2/")
	@Produces("text/plain")
	@Consumes(MediaType.APPLICATION_JSON)
	public String updateSingleResult2(JSONObject obj)
	{		
		System.out.println(" Results Stages SigleResults update");
		Session session = SessionFactoryUtil.getSessionFactory().openSession();
		MriTestRequest req;
		MriBinaryResults bin = new MriBinaryResults(); 
		MriUser user =new MriUser();
		//Insert Result Status 1 
		int Status=1;
		int ResultId=-1;
		try {
			req = (MriTestRequest) session.load(MriTestRequest.class, obj.getInt("id"));
			
			ResultId =obj.getInt("result_id");
			
			bin.setMriTestRequest(req);
			bin.setResultValue(obj.getString("value"));
			
			System.out.println(" SigleResults updateResut entered by"+obj.getInt("result_by"));
			user = (MriUser) session.load(MriUser.class, obj.getInt("result_by"));
			bin.setEnteredBy(user);
			
			bin.setResultComment(obj.getString("comment"));
			
			req.setStatus(Status);
			req.setComments(obj.getString("test_comment"));
			
			boolean res = binDbDriver.updateSingleResult(bin,ResultId);
			if(res)
				return "true";
		} catch (JSONException e) {
			e.printStackTrace();
		}
		return "false";
	}
	
	
	@POST
	@Path("/getCompletedTestReqests/")
	@Produces(MediaType.APPLICATION_JSON)
	@Consumes(MediaType.APPLICATION_JSON)
	public String getCompletedTestReqests(JSONObject obj)
	{		
		System.out.println("getCompletedTestReqests Print reports" );
		JSONSerializer serializer = new JSONSerializer();
	
		if(obj.has("start_date") && obj.has("end_date")) {
			try{
			System.out.println("Start and end Date "+ obj.getString("start_date")+obj.getString("end_date"));
				return serializer.serialize(binDbDriver.GetCompletedTestRequestsForPeriod(obj.getString("start_date"), obj.getString("end_date")));
			}catch (Exception e) {
				e.printStackTrace();
				return null;
			}

		}	else if (obj.has("start_reqID") && obj.has("end_reqID")){
			try {
				System.out.println("Start and end Req ID "+ obj.getString("start_reqID")+obj.getString("end_reqID"));
				String startrequestID=obj.getString("start_reqID").replaceAll("\\p{Z}","");
				int requestPrimaryKeyStart=mriTestRequestDBDriver.GetRequestPrimaryKeyByRequestID(startrequestID);
				
				String endrequestID=obj.getString("end_reqID").replaceAll("\\p{Z}","");
				int requestPrimaryKeyEnd=mriTestRequestDBDriver.GetRequestPrimaryKeyByRequestID(endrequestID);
				
				System.out.println("Start and end Req ID "+requestPrimaryKeyStart+requestPrimaryKeyEnd);
				return serializer.serialize(binDbDriver.GetTestComplatedForRequastIDRange(requestPrimaryKeyStart,requestPrimaryKeyEnd));
			} catch (JSONException e) {
				e.printStackTrace();
				return null;
			}
		} else {
			return serializer.serialize(binDbDriver.GetCompletedTestRequests());
		}
	}
	
	@GET
	@Path("/GetSingleTestRequestData/{reqid}")
	@Produces(MediaType.APPLICATION_JSON)
	public String GetSingleTestRequestData(@PathParam("reqid")int reqid) {
		try {			
			List data= binDbDriver.GetSingleTestRequestData(reqid);
			
			JSONSerializer serializer = new JSONSerializer();

			return serializer.serialize(data);
			
		} catch (Exception e) {
			return e.getMessage();
		}
	}
	
	@GET
	@Path("/GetCompletedTestRequestsById/{reqid}")
	@Produces(MediaType.APPLICATION_JSON)
	public String GetCompletedTestRequestsById(@PathParam("reqid")int reqid) {
		try {	
			System.out.println("Print Singel Report Resouces");
			List data= binDbDriver.GetCompletedTestRequestsById(reqid);
			
			JSONSerializer serializer = new JSONSerializer();

			return serializer.serialize(data);
			
		} catch (Exception e) {
			return e.getMessage();
		}
	}
}
