package core.resources.mri;

import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.HashSet;
import java.util.List;
import java.util.Set;

import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.HttpHeaders;
import javax.ws.rs.core.MediaType;

import org.codehaus.jettison.json.JSONArray;
import org.codehaus.jettison.json.JSONException;
import org.codehaus.jettison.json.JSONObject;

import lib.driver.mri.driver_class.MriExternalPatientDBDriver;
import lib.driver.mri.driver_class.MriHospitalDBDriver;
import lib.driver.mri.driver_class.MriHospitalPatientDBDriver;
import lib.driver.mri.driver_class.MriPatientDBDriver;
import lib.driver.mri.driver_class.MriTestRequestDBDriver;
import core.classes.mri.MriInternalPatient;
import core.classes.mri.MriHospital;
import core.classes.mri.MriHospitalPatient;
import core.classes.mri.MriLaboratoryTest;
import core.classes.mri.MriPatient;
import core.classes.mri.MriSpecimen;
import core.classes.mri.MriTestRequest;
import flexjson.JSONSerializer;


@Path("MriPatient")
public class MriPatientResource {

	DateFormat dateformat = new SimpleDateFormat("yyyy-MM-dd");
	MriPatientDBDriver mriPatientDBDriver= new MriPatientDBDriver();
	MriExternalPatientDBDriver mriExternalPatientDBDriver= new MriExternalPatientDBDriver();
	MriHospitalPatientDBDriver mriHospitalPatientDBDriver= new MriHospitalPatientDBDriver();
	MriHospitalDBDriver mriHospitalDBDriver = new MriHospitalDBDriver();

	//Modified 05 05 16
	@GET		
	@Path("/GetAllPatients")
	@Produces(MediaType.APPLICATION_JSON)
	public String GetAllPatients() {

		String result="";
		try {
			List<MriPatient> testRequests= mriPatientDBDriver.GetAllPatients();

			JSONSerializer serializer = new JSONSerializer();

			return serializer.include("mriHospitalPatients.mriHospital").include("mriHospitalPatients.bhtNo").include("mriHospitalPatients.ward").include("mriInternalPatients.address").include("mriInternalPatients.contactNo1").include("mriInternalPatients.contactNo2").exclude("*.class").serialize(testRequests);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
		} catch (Exception e) {
			return e.getMessage();
		}
    
    		}
	
	
	
	//Kanchana Search 02 07 16
	@GET		
	@Path("/GetAllPatientsSearch")
	@Produces(MediaType.APPLICATION_JSON)
	public String GetAllPatientsSearch() {

		String result="";
		try {
			List<MriPatient> testRequests= mriPatientDBDriver.GetAllPatients();

			JSONSerializer serializer = new JSONSerializer();

			return serializer.include("patientId").include("name").include("HIN")
					.include("patientType").include("mriHospitalPatients.mriHospital.hospitalId").include("mriHospitalPatients.mriHospital.hospitalName").include("mriHospitalPatients.bhtNo").include("mriInternalPatients.bhtNo").exclude("*.class").exclude("*")
					.serialize(testRequests);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
		} catch (Exception e) {
			return e.getMessage();
		}
    
    		}
	
	
	@GET
	@Path("/GetPatientById/{data}")
	@Produces(MediaType.APPLICATION_JSON)
	public String GetExternalPatientById(@PathParam("data")  int patientID) { 

		try {
			List<MriPatient> patientList = mriPatientDBDriver.GetPatientById(patientID); // dbaccess

			JSONSerializer serializer = new JSONSerializer();

			return serializer.include("patientId").include("name").include("HIN").include("patientType").include("mriHospitalPatients.mriHospital.hospitalName").include("mriHospitalPatients.mriHospital.hospitalId").include("mriHospitalPatients.bhtNo").include("mriInternalPatients.bhtNo").exclude("*.class").exclude("*")
					.serialize(patientList);

		} catch (Exception e) {
			return e.getMessage();
		}
	}
	
	
	/*public String GetAllPatients(@Context HttpHeaders headers) {

    	String userAgent = headers.getRequestHeader("Authorization").get(0);
    	System.out.println("GetAllPatients"+userAgent);
    	String ua = userAgent.toString();
    	if( userAgent == ua){
		String result="";
		try {
			List<MriPatient> testRequests= mriPatientDBDriver.GetAllPatients();

			JSONSerializer serializer = new JSONSerializer();

			return serializer.include("MriHospitalPatient.mriHospital").include("MriHospitalPatient.bhtNo").include("MriHospitalPatient.ward").include("MriInternalPatient.address").include("MriInternalPatient.contactNo1").include("MriInternalPatient.contactNo2").exclude("*.class").serialize(testRequests);

		} catch (Exception e) {
			return e.getMessage();
		}
    	}
    	else{
    		System.out.println("Error");

    	}
    		} */

	@POST
	@Path("/InsertNewPatient")
	@Produces(MediaType.APPLICATION_JSON)
	@Consumes(MediaType.APPLICATION_JSON)
	public String InsertNewPatient(JSONObject pJson)
	{
		try {

				JSONArray data = pJson.getJSONArray("NewPatient");

				MriPatient newPatient= new MriPatient();
				String patientType=data.getJSONObject(0).getString("PatientType");

				newPatient.setName(data.getJSONObject(0).getString("PatientName"));
				System.out.println("Bithday ___" +data.getJSONObject(0).getString("PatientBday"));

					//newPatient.setBirthday(dateformat.parse(data.getJSONObject(0).getString("PatientBday")));
				
				newPatient.setAge(data.getJSONObject(0).getString("PatientAge"));
				newPatient.setSex(data.getJSONObject(0).getString("PatientGender"));
				newPatient.setNic(data.getJSONObject(0).getString("PatientNic"));
				newPatient.setHIN(data.getJSONObject(0).getInt("PatientHIN"));
				
				newPatient.setIsActive(true);
				
				//change 3 8 16
				newPatient.setPatientType(patientType);
				
				Boolean newPatientObject=mriPatientDBDriver.InsertNewPatient(newPatient);

				System.out.println(patientType);

				if (patientType.equals("Internal Patient")){
					MriInternalPatient newInternalPatient= new MriInternalPatient();

					newInternalPatient.setMriPatient(newPatient);
					newInternalPatient.setBhtNo(data.getJSONObject(0).getString("PatientBht"));
System.out.println(data.getJSONObject(0).getString("PatientBht"));
					newInternalPatient.setAddress(data.getJSONObject(0).getString("PatientAddress"));
					newInternalPatient.setContactNo1(data.getJSONObject(0).getString("PatientContact1"));
					newInternalPatient.setContactNo2(data.getJSONObject(0).getString("PatientContact2"));

					Boolean internalPatient=mriExternalPatientDBDriver.InsertInternalNewPatient(newInternalPatient);
				}
				if (patientType.equals("External Patient")){
			
					MriHospitalPatient newHospitalPatient=new MriHospitalPatient();

					int hospitalID=data.getJSONObject(0).getInt("PatientHospital");
					System.out.println("I'm External Patient"+hospitalID);
					
					MriHospital hospital= mriHospitalDBDriver.GetHospitalObject(hospitalID);

					newHospitalPatient.setMriHospital(hospital);
					newHospitalPatient.setMriPatient(newPatient);
					newHospitalPatient.setWard(data.getJSONObject(0).getString("PatientWard"));
					newHospitalPatient.setBhtNo(data.getJSONObject(0).getString("PatientBht"));

					Boolean hospitalP=mriHospitalPatientDBDriver.InsertHospitalNewPatient(newHospitalPatient);
				}






		} catch (JSONException e) {
			e.printStackTrace();
			return null;
		}
		catch (Exception e) {
			System.out.println(e.getMessage());
			return null;
		}
		return "TRUE";

	}

	@GET
	@Path("/GetPatientCount")
	@Produces(MediaType.APPLICATION_JSON)
	public String GetPatientCount() {
		String result="";
		try {
			int patientCount = mriPatientDBDriver.GetPatientCount();

			JSONSerializer serializer = new JSONSerializer();

			return serializer.exclude("*.class").serialize(patientCount);

		} catch (Exception e) {
			return e.getMessage();
		}
	}
	
	//change 3 10 16
	@POST
	@Path("/UpdatePatient")
	@Produces(MediaType.APPLICATION_JSON)
	@Consumes(MediaType.APPLICATION_JSON)
	public String UpdatePatient(JSONObject pJson)
	{
		try {

				JSONArray data = pJson.getJSONArray("patient");

				MriPatient Patient= new MriPatient();
			//	String patientType=data.getJSONObject(0).getString("PatientType");
				Patient.setPatientId (Integer.parseInt(data.getJSONObject(0).getString("PatientId")));
				String PatientName=data.getJSONObject(0).getString("PatientName");
				Patient.setName(PatientName);
				//Patient.setBirthday(dateformat.parse(data.getJSONObject(0).getString("PatientBday")));
				Patient.setAge(data.getJSONObject(0).getString("PatientAge"));
				Patient.setSex(data.getJSONObject(0).getString("PatientGender"));
				Patient.setNic(data.getJSONObject(0).getString("PatientNic"));
				//newPatient.setIsActive(true);
				
				//.out.println("Before Update"+patientType);
				
				//Patient.setPatientType(patientType);
				
				Boolean newPatientObject=mriPatientDBDriver.UpdatePatient(Patient,PatientName);

				//System.out.println(patientType);

				/*if (patientType.equals("Internal Patient")){
					MriInternalPatient newInternalPatient= new MriInternalPatient();

					newInternalPatient.setMriPatient(newPatient);
					newInternalPatient.setAddress(data.getJSONObject(0).getString("PatientAddress"));
					newInternalPatient.setContactNo1(data.getJSONObject(0).getString("PatientContact1"));
					newInternalPatient.setContactNo2(data.getJSONObject(0).getString("PatientContact2"));

					Boolean internalPatient=mriExternalPatientDBDriver.InsertInternalNewPatient(newInternalPatient);
				}
				if (patientType.equals("External Patient")){
					System.out.println("I'm External");
					MriHospitalPatient newHospitalPatient=new MriHospitalPatient();

					int hospitalID=data.getJSONObject(0).getInt("PatientHospital");
					MriHospital hospital= mriHospitalDBDriver.GetHospitalObject(hospitalID);

					newHospitalPatient.setMriHospital(hospital);
					newHospitalPatient.setMriPatient(newPatient);
					newHospitalPatient.setWard(data.getJSONObject(0).getString("PatientWard"));
					newHospitalPatient.setBhtNo(data.getJSONObject(0).getString("PatientBht"));

					Boolean hospitalP=mriHospitalPatientDBDriver.InsertHospitalNewPatient(newHospitalPatient);
				} */

		} catch (JSONException e) {
			e.printStackTrace();
			return null;
		}
		catch (Exception e) {
			System.out.println(e.getMessage());
			return null;
		}
		return "TRUE";

	}
}
