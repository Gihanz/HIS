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
import lib.driver.mri.driver_class.MriVerifyResultsDBDriver;

@Path("MriVerifyResult")
public class MriVerifyResultsResource {
	MriVerifyResultsDBDriver resultsDbDriver = new MriVerifyResultsDBDriver();
	
	@POST
	@Path("/getTestRequests/")
	@Produces(MediaType.APPLICATION_JSON)
	@Consumes(MediaType.APPLICATION_JSON)
	public String getTestRequests(JSONObject obj)
	{		
		System.out.println("get Test Results- Verify Stage");
		JSONSerializer serializer = new JSONSerializer();
		if(obj.has("start_date") && obj.has("end_date")) {
			try {
				return serializer.serialize(resultsDbDriver.GetTestRequestForPeriod(obj.getString("start_date"), obj.getString("end_date")));
			} catch (JSONException e) {
				e.printStackTrace();
				return null;
			}
		} else {
			return serializer.serialize(resultsDbDriver.GetTestRequests());
		}
	}
	

	
	
	@POST
	@Path("/setSigleResults/")
	@Produces(MediaType.APPLICATION_JSON)
	@Consumes(MediaType.APPLICATION_JSON)
	public String setSigleResults(JSONObject obj)
	{	
		System.out.println(" Verify Satages etSigleResults");
			Session session = SessionFactoryUtil.getSessionFactory().openSession();
			MriTestRequest req;
			int resultId =-1;
			MriBinaryResults bin = new MriBinaryResults(); 
			MriUser user =new MriUser();
			//verified 2 not verified 3
			int VerifyStatus=3;
			System.out.println("Add Single Verify Satage Result");
			try {
				resultId = obj.getInt("result_id");
				req = (MriTestRequest) session.load(MriTestRequest.class, obj.getInt("test_request_id"));
				VerifyStatus= obj.getInt("verify_status");
				req.setStatus(VerifyStatus);  
				bin.setMriTestRequest(req);
			
			    req.setComments(obj.getString("comment"));
				
				user = (MriUser) session.load(MriUser.class, obj.getInt("verified_by"));
				
				System.out.println("Add Single User Results");
				
				bin.setVerifiedBy(user);
				bin.setResultComment(obj.getString("result_comment"));
				boolean res = resultsDbDriver.addSingleVerifyResults(bin,resultId,VerifyStatus);
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
		System.out.println(" Verify Satage getCompletedTestReqests");
		JSONSerializer serializer = new JSONSerializer();
		if(obj.has("start_date") && obj.has("end_date")) {
			try {
				return serializer.serialize(resultsDbDriver.GetCompletedTestRequestsForPeriod(obj.getString("start_date"), obj.getString("end_date")));
			} catch (JSONException e) {
				e.printStackTrace();
				return null;
			}
		} else {
			return serializer.serialize(resultsDbDriver.GetCompletedTestRequests());
		}
	}
	
	@GET
	@Path("/GetSingleTestRequestData/{reqid}")
	@Produces(MediaType.APPLICATION_JSON)
	public String GetSingleTestRequestData(@PathParam("reqid")int reqid) {
		try {			
			List data= resultsDbDriver.GetSingleTestRequestData(reqid);
			
			JSONSerializer serializer = new JSONSerializer();

			return serializer.serialize(data);
			
		} catch (Exception e) {
			return e.getMessage();
		}
	}
}
