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
import org.hibernate.Session;

import lib.SessionFactoryUtil;
import lib.driver.mri.driver_class.MriHospitalDBDriver;
import lib.driver.mri.driver_class.MriPatientDBDriver;
import lib.driver.mri.driver_class.MriTestRequestDBDriver;
import core.classes.mri.MriDepartment;
import core.classes.mri.MriHospital;
import core.classes.mri.MriLaboratory;
import core.classes.mri.MriLaboratoryTest;
import core.classes.mri.MriPatient;
import core.classes.mri.MriSpecimenType;
import flexjson.JSONSerializer;


@Path("MriHospital")
public class MriHospitalResource {
	
	
	MriHospitalDBDriver mriHospitalDBDriver= new MriHospitalDBDriver();
	
	@GET
	@Path("/GetAllHospitals")
	@Produces(MediaType.APPLICATION_JSON)
	public String GetAllHospitals() {
		String result="";
		try {
			List<MriHospital> testRequests= mriHospitalDBDriver.GetAllHospitals();
			
			JSONSerializer serializer = new JSONSerializer();

			return serializer.exclude("*.class").serialize(testRequests);
			
		} catch (Exception e) {
			return e.getMessage();
		}
	}
	
	@GET
	@Path("/GetHospitalById/{data}")
	@Produces(MediaType.APPLICATION_JSON)
	public String GetHospitalById(@PathParam("data")  int hospitalID) { // eka parameter ekak ena eka
				
		try {
			List<MriHospital> hospitalData = mriHospitalDBDriver.GetHospitalById(hospitalID); // dbaccess
			
			JSONSerializer serializer = new JSONSerializer();

			return serializer.exclude("*.class").serialize(hospitalData);
			
		} catch (Exception e) {
			return e.getMessage();
		}
	}
	
	/***
	 * Update Hospital details 
	 * @param pjson is a JSON object which contains new details about the Hospital that need to be updated
	 * @return returns a string value.True if the user updated successfully else it returns false
	 */
	
	@POST
	@Path("/UpdateHospital")
	@Produces(MediaType.APPLICATION_JSON)
	@Consumes(MediaType.APPLICATION_JSON)
	public String UpdateLaboratoryTest(JSONObject pJson) 
	{
		
		try {
			MriHospital hos =new MriHospital();
			
			
			hos.setHospitalId(Integer.parseInt(pJson.getJSONObject("obj").getString("hospitalId")));		
		    hos.setHospitalName(pJson.getJSONObject("obj").getString("hospitalName"));
		 	hos.setAddress(pJson.getJSONObject("obj").getString("address"));
			hos.setLocation(pJson.getJSONObject("obj").getString("location"));
			hos.setContactNo1(pJson.getJSONObject("obj").getString("contactNo1"));
			hos.setContactNo2(pJson.getJSONObject("obj").getString("contactNo2"));

			
			
			mriHospitalDBDriver.UpdateHospital(hos);
			
			return "True";
			
		} catch (Exception e) {
			e.printStackTrace();
			return e.getMessage().toString();
		}					
	}
	
	@POST
	@Path("/InsertNewHospital")
	@Produces(MediaType.APPLICATION_JSON)
	@Consumes(MediaType.APPLICATION_JSON)
	public String InsertNewHospital(JSONObject pJson)
	{
		try {
			System.out.println("New hos add");

				JSONArray data = pJson.getJSONArray("NewHospital");

				MriHospital newHospital= new MriHospital();
				
				newHospital.setHospitalName(data.getJSONObject(0).getString("HospitalName"));
				newHospital.setAddress(data.getJSONObject(0).getString("HospitalAddress"));
				newHospital.setLocation(data.getJSONObject(0).getString("HospitalLocation"));
				newHospital.setContactNo1(data.getJSONObject(0).getString("HospitalContactNo1"));
				newHospital.setContactNo2(data.getJSONObject(0).getString("HospitalContactNo2"));
				Session session = SessionFactoryUtil.getSessionFactory().openSession();
				session.close();
				
				Boolean newHospitalObject=mriHospitalDBDriver.InsertNewHospital(newHospital);

				String hospitalType=data.getJSONObject(0).getString("hospitalType");

				System.out.println(hospitalType);
				//mriDepartmentDBDriver.InsertNewDepartment(newDepartment);

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
