package core.resources.mri;

import java.util.List;

import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

import org.codehaus.jettison.json.JSONArray;
import org.codehaus.jettison.json.JSONException;
import org.codehaus.jettison.json.JSONObject;

import lib.driver.mri.driver_class.MriExternalPatientDBDriver;
import lib.driver.mri.driver_class.MriHospitalDBDriver;
import lib.driver.mri.driver_class.MriPatientDBDriver;
import core.classes.hr.HrEmployeeView;
import core.classes.mri.MriHospital;
import core.classes.mri.MriHospitalPatient;
import core.classes.mri.MriInternalPatient;
import core.classes.mri.MriPatient;
import flexjson.JSONSerializer;

//Equivlanat to InternalPatient 

@Path("MriExternalPatient")
public class MriExternalPatientResource {

	MriExternalPatientDBDriver mriExternalPatientDBDriver= new MriExternalPatientDBDriver();
	MriHospitalDBDriver mriHospitalDBDriver= new MriHospitalDBDriver();
	
	@GET
	@Path("/GetAllExternalPatients")
	@Produces(MediaType.APPLICATION_JSON)
	public String GetAllExternalPatients() {
		String result="";
		try {
			List<MriInternalPatient> testRequests= mriExternalPatientDBDriver.GetAllExternalPatients();

			JSONSerializer serializer = new JSONSerializer();

			return serializer.exclude("*.class").serialize(testRequests);

		} catch (Exception e) {
			return e.getMessage();
		}
	}

	@GET
	@Path("/GetExternalPatientById/{data}")
	@Produces(MediaType.APPLICATION_JSON)
	public String GetExternalPatientById(@PathParam("data")  int patientID) { 

		try {
			List<MriInternalPatient> patientList = mriExternalPatientDBDriver.GetExternalPatientById(patientID); // dbaccess

			JSONSerializer serializer = new JSONSerializer();

			return serializer.exclude("*.class").serialize(patientList);

		} catch (Exception e) {
			return e.getMessage();
		}
	}
	
	

	@POST
	@Path("/UpdatePatient")
	@Produces(MediaType.APPLICATION_JSON)
	@Consumes(MediaType.APPLICATION_JSON)
	public String UpdatePatient(JSONObject pJson)
	{
		try {

				JSONArray data = pJson.getJSONArray("patient");

				MriPatient Patient= new MriPatient();
				String patientType=data.getJSONObject(0).getString("PatientType");
				Patient.setPatientId (Integer.parseInt(data.getJSONObject(0).getString("PatientId")));	
				System.out.println("Before Update"+patientType);
				
				Patient.setPatientType(patientType);
				

				System.out.println(patientType);

				if (patientType.equals("Internal Patient")){
					MriInternalPatient newInternalPatient= new MriInternalPatient();

					newInternalPatient.setMriPatient(Patient);
					newInternalPatient.setAddress(data.getJSONObject(0).getString("PatientAddress"));
					newInternalPatient.setContactNo1(data.getJSONObject(0).getString("PatientContact1"));
					newInternalPatient.setContactNo2(data.getJSONObject(0).getString("PatientContact2"));

					Boolean internalPatient=mriExternalPatientDBDriver.UpdateExternalPatient(newInternalPatient);
				}
				/*if (patientType.equals("External Patient")){
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
