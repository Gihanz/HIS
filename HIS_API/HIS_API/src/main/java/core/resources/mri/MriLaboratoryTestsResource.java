package core.resources.mri;


import java.util.List;

import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

import org.codehaus.jettison.json.JSONObject;

import core.classes.mri.MriDepartment;
import core.classes.mri.MriLaboratoryTest;
import lib.driver.mri.driver_class.MriLaboratoryTestDBDriver;
import flexjson.JSONSerializer;


@Path("MriLaboratoryTest")
public class MriLaboratoryTestsResource {
	
MriLaboratoryTestDBDriver mriLaboratoryTestDBDriver= new MriLaboratoryTestDBDriver();
	
	@GET
	@Path("/GetAllLaboratoryTest")
	@Produces(MediaType.APPLICATION_JSON)
	public String GetAllLaboratoryTest() {
		String result="";
		try {
			List<MriLaboratoryTest> testRequests= mriLaboratoryTestDBDriver.GetAllLabTests();
			
			JSONSerializer serializer = new JSONSerializer();

			return serializer.exclude("*.class").serialize(testRequests);
			
		} catch (Exception e) {
			return e.getMessage();
		}
	}
	
	/***
	 * Update LaboratoryTest details 
	 * @param pjson is a JSON object which contains new details about the LaboratoryTest that need to be updated
	 * @return returns a string value.True if the user updated successfully else it returns false
	 */
	
	@POST
	@Path("/UpdateLaboratoryTest")
	@Produces(MediaType.APPLICATION_JSON)
	@Consumes(MediaType.APPLICATION_JSON)
	public String UpdateLaboratoryTest(JSONObject pJson) 
	{
		
		try {
			MriLaboratoryTest labTest =new MriLaboratoryTest();
			
			
			labTest.setLaboratoryTestId(Integer.parseInt(pJson.getJSONObject("obj").getString("labTestId")));		
	    //  labTest.setDepartmentName(pJson.getJSONObject("obj").getString("departmentName"));
	    //  labTest.setMriLaboratory(pJson.getJSONObject("obj").getString("lab"));
		//  labTest.setMriSpecimenType(pJson.getJSONObject("obj").get("specimenType"));
		 	labTest.setTestFullName(pJson.getJSONObject("obj").getString("testName"));
			labTest.setTestShortName(pJson.getJSONObject("obj").getString("testShortName"));
			labTest.setIsBinary(pJson.getJSONObject("obj").getInt("isBinaryType"));
			labTest.setDefultTestComment(pJson.getJSONObject("obj").getString("defultTestComment"));
			labTest.setTestUnit(pJson.getJSONObject("obj").getString("testUnit"));
			
			
			mriLaboratoryTestDBDriver.UpdateLaboratoryTest(labTest);
			
			return "True";
			
		} catch (Exception e) {
			e.printStackTrace();
			return e.getMessage().toString();
		}					
	}
}
