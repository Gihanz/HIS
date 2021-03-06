package core.resources.inward.WardAdmission;

import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;

import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

import org.codehaus.jettison.json.JSONObject;

import core.classes.inward.WardAdmission.Admission;
import flexjson.JSONException;
import flexjson.JSONSerializer;
import lib.driver.inward.driver_class.WardAdmission.AdmissionDBDriver;


@Path("Admission")
public class AdmissionResource {
	
	AdmissionDBDriver wardadmissiondbDriver = new AdmissionDBDriver();
	DateFormat dateformat = new SimpleDateFormat("yyyy-MM-dd'T'HH:mm");
	
	
	@POST
	@Path("/addWardAdmission")
	@Produces(MediaType.APPLICATION_JSON)
	@Consumes(MediaType.APPLICATION_JSON)
	public String addWard(JSONObject wJson)
	{
		
		try {
			Admission wardadmission  =  new Admission();
			
			wardadmission.setBhtNo(wJson.getString("bhtNo"));	
			wardadmission.setBedNo(wJson.getInt("bedNo"));
			wardadmission.setWardNo(wJson.getString("wardNo"));
			wardadmission.setDailyNo(wJson.getInt("dailyNo"));
			wardadmission.setMonthlyNo(wJson.getInt("monthlyNo"));	
			wardadmission.setYearlyNo(wJson.getInt("yearlyNo"));
			wardadmission.setAdmitDateTime(dateformat.parse(wJson.get("admitDateTime").toString())); 
			wardadmission.setAdmitDateTime(dateformat.parse(wJson.getString("admitDateTime").toString()));
			wardadmission.setPatientComplain(wJson.getString("patientComplain").toString());	
			wardadmission.setPreviousHistory(wJson.getString("previousHistory"));
			wardadmission.setCreatedDateTime(dateformat.parse(wJson.getString("createdDateTime")));
			wardadmission.setLastUpdatedDateTime(dateformat.parse(wJson.getString("LastUpdatedDateTime").toString()));	
			int pid=wJson.getInt("patientID");
			int docID=wJson.getInt("DoctorID");
			int createUser=wJson.getInt("createdUser");
			int UpdateUser=wJson.getInt("LastUpdatedUser");
			
			wardadmission.setDischargeType("none");
			wardadmission.setRemark("");
			wardadmission.setAdmissionUnit("Ward");
			
		
			wardadmissiondbDriver.insertWardAdmission(wardadmission,pid,docID,createUser,UpdateUser);
			 			
			return "true";
		} catch (Exception e) {
			 System.out.println(e.getMessage());
			 
			return e.getMessage().toString(); 
		}

	}
	
	
	
	@GET
	@Path("/getWardAdmission")
	@Produces(MediaType.APPLICATION_JSON)
	public String getWard()
	{
		List<Admission> wardAdmissionList =wardadmissiondbDriver.getWardAdmissionList();
		JSONSerializer serializer = new JSONSerializer();
		return  serializer.include("Inpatient.patientID","Inpatient.patientTitle","Inpatient.patientFullName","AdminEmployee.empEmpId","AdminEmployee.empTitle","AdminEmployee.empFName","AdminEmployee.empLName","User.userID").exclude("*.class","Inpatient.*","AdminEmployee.*","User.*").serialize(wardAdmissionList);

	}
	
	@GET
	@Path("/getWardAdmissionDetails/{bhtNo}")
	@Produces(MediaType.APPLICATION_JSON)
	public String getWardAdmissionDetails(@PathParam("bhtNo")  String bhtNo){
		
		 List<Admission> wardlist =wardadmissiondbDriver.getWardAdmissionDetails(bhtNo);
		 JSONSerializer serializor=new JSONSerializer();
		 return  serializor.include("Inpatient.patientID","AdminEmployee.empEmpId","User.userID").exclude("*.class","Inpatient.*","AdminEmployee.*","User.*").serialize(wardlist);

	
		
	}
	
	@GET
	@Path("/getWardAdmissionByPatientID/{patientID}")
	@Produces(MediaType.APPLICATION_JSON)
	public String getWardAdmissionByPatientID(@PathParam("patientID")  int patientID){
		
		 List<Admission> wardlist =wardadmissiondbDriver.getWardAdmissionByPatientID(patientID);
		 JSONSerializer serializor=new JSONSerializer();
		 return  serializor.include("Inpatient.patientID","AdminEmployee.empEmpId","User.userID").exclude("*.class","Inpatient.*","AdminEmployee.*","User.*").serialize(wardlist);

	
	}

	
	
	@PUT
	@Path("/updateDischarge")
	@Produces(MediaType.TEXT_PLAIN)
	@Consumes(MediaType.APPLICATION_JSON)
	public  String updateDischarge(JSONObject wJson){
		
		String result="false";
		boolean r=false;
		
		try{
			String BhtNo=wJson.getString("BhtNo");
			String discharjType=wJson.getString("discharjType");	
			String remark=wJson.getString("remark");
			int LastUpdatedUser=wJson.getInt("LastUpdatedUser");
			Date LastUpdatedDateTime=dateformat.parse(wJson.getString("LastUpdatedDateTime"));
			r=wardadmissiondbDriver.updateDischarge(BhtNo,discharjType,remark,LastUpdatedUser,LastUpdatedDateTime);
			result=String.valueOf(r);
		
			return result;
			
		}
		catch( JSONException ex){
			ex.printStackTrace();	
			return result;
		}
		
		catch( Exception ex){
			ex.printStackTrace();
			return ex.getMessage();
		}

	}
	
}
