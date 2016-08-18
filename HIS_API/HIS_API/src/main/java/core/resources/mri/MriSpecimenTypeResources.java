package core.resources.mri;

import java.text.SimpleDateFormat;
import java.util.ArrayList;
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

import com.sun.org.apache.xerces.internal.impl.xpath.regex.ParseException;

import lib.driver.mri.driver_class.MriSpecimenTypeDBDriver;
import lib.driver.mri.driver_class.MriTestRequestDBDriver;
import core.classes.lims.Specimen;
import core.classes.mri.MriParentResult;
import core.classes.mri.MriSpecimen;
import core.classes.mri.MriSpecimenType;
import core.classes.mri.MriTestParentFields;
import core.classes.mri.MriTestRequest;
import core.classes.mri.MriTestResult;
import core.classes.mri.MriTestSubFields;
import core.classes.mri.MriUserRoles;
import flexjson.JSONSerializer;

/**
 * MriSpecimenTypeResources class contains all the rest-full web methods regarding Specimen Type
 *
 */
@Path("MriSpecimenType")
public class MriSpecimenTypeResources {

	MriSpecimenTypeDBDriver specimenTypeDBDriver = new MriSpecimenTypeDBDriver();

	/**
	 * Get all the SpecimenTypes that registered in the system	
	 * @return returns a JSON object that contains all the Specimen Types
	 */
	
	@GET
	@Path("/GetAllSpecimenType")
	@Produces(MediaType.APPLICATION_JSON)
	public String GetTestParentFields() {
		try {
System.out.println("get new all types");
			List<MriSpecimenType> specimenList = specimenTypeDBDriver.GetSMriSpecimenType();
			JSONSerializer serializer = new JSONSerializer();

			return serializer.exclude("*.class").serialize(specimenList);
			// return
			// serializer.include("*.class").exclude("*").serialize(specimenList);

		} catch (Exception e) {
			return e.getMessage();
		}
	}
	/**
	 * Get all the specimen types details that entered to the system	
	 * @return returns a JSON object that contains all the entered specimen Type details
	 */

	@GET
	@Path("/GetAllMriSpecimenTypeDetails")
	@Produces(MediaType.APPLICATION_JSON)
	public String GetAllSpecimenDetails() {
		try {
System.out.println("get all type");
			List<MriSpecimenType> specimenList = specimenTypeDBDriver
					.GetSMriSpecimenType();
			JSONSerializer serializer = new JSONSerializer();

			return serializer.exclude("specimenName").exclude("*.class", "")
					.serialize(specimenList);
			// return serializer.exclude("*.class").serialize(specimenList);
			// return
			// serializer.include("specimenId","mriSpecimenType.specimenTypeId","mriTestRequest.testRequestId","specimenBarcode","specimenCollectedPerson","specimenDeliveredDepartmentDate","specimenReceivedDate","storedLocation","storedOrDestroyed").exclude("*").serialize(specimenList);

		} catch (Exception e) {
			return e.getMessage();
		}
	}
	
	/**
	 * Add a new specimen type to the system
	 * @param uJson the JSON object that contains details about newly inserted specimen type
	 * @return a string value.True if the insertion is successful else it returns false
	 */

	@POST
	@Path("/addMriSpecimenTypes")
	@Produces(MediaType.APPLICATION_JSON)
	@Consumes(MediaType.APPLICATION_JSON)
	public String addSpecimenInformation(JSONObject pJson) {
		try {
			System.out.println("Add new specimen type");
			JSONArray data = pJson.getJSONArray("NewMriSpecimenType");

			MriSpecimenType specimenType = new MriSpecimenType();		 

			 
			specimenType.setSpecimenName(data.getJSONObject(0).getString("specimenName"));
			System.out.println("________________________"
					+ data.getJSONObject(0).getString("specimenName"));

			specimenTypeDBDriver.addMriSpecimenTypeInformation(specimenType);
 
		} catch (Exception e) {
			System.out.println(e.getMessage());

			return null;
		}
		return "TRUE";
	}
	 
	/***
	 * Update specimen type details 
	 * @param jsnUser is a JSON object which contains new details about the specimen type that need to be updated
	 * @return returns a string value.True if the user updated successfully else it returns false
	 */
	
	@POST
	@Path("/UpdateSpecimenType")
	@Produces(MediaType.APPLICATION_JSON)
	@Consumes(MediaType.APPLICATION_JSON)
	public String UpdateSpecimenType(JSONObject pJson) //not sure
	{
		
		try {
			//System.out.println("_____"+pJson );
			
			MriSpecimenType ur=new MriSpecimenType();
			System.out.println("Json obj"+pJson.getJSONObject("obj").getString("specimenTypeId") );
			
			
			ur.setSpecimenTypeId(Integer.parseInt(pJson.getJSONObject("obj").getString("specimenTypeId")));
			ur.setSpecimenName(pJson.getJSONObject("obj").getString("specimenName"));
			
			//System.out.println("______"+Integer.parseInt(pJson.getString("specimenTypeID")));
			
			specimenTypeDBDriver.UpdateSpecimenType(ur);
			System.out.println("specimenTypeDBDriver.UpdateSpecimenType(ur)");
			
			return "True";
			
		} catch (Exception e) {
			e.printStackTrace();
			return e.getMessage().toString();
		}					
	}

	
}


