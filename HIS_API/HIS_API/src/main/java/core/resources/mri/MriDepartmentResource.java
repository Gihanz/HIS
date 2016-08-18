package core.resources.mri;

import java.util.List;

import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

import org.codehaus.jettison.json.JSONArray;
import org.codehaus.jettison.json.JSONObject;
import org.hibernate.Session;

import lib.SessionFactoryUtil;
import lib.driver.mri.driver_class.MriDepartmentDBDriver;
import lib.driver.mri.driver_class.MriEmployeeDBDriver;
import core.classes.mri.MriDepartment;
import core.classes.mri.MriEmployee;
import core.classes.mri.MriInternalPatient;
import core.classes.mri.MriLaboratory;
import core.classes.mri.MriUserRoles;
import flexjson.JSONException;
import flexjson.JSONSerializer;

/**
 * MriDepartmentResources class contains all the rest-full web methods regarding Departments
 *
 */
@Path("MriDepartment")
public class MriDepartmentResource {

	MriDepartmentDBDriver mriDepartmentDBDriver= new MriDepartmentDBDriver();

	/**
	 * Get all the departments that registered in the system	
	 * @return returns a JSON object that contains all the registered departments
	 */
	@GET
	@Path("/GetAllDepartments")
	@Produces(MediaType.APPLICATION_JSON)
	public String GetAllDepartments() {
		String result="";
		try {
			List<MriDepartment> departments= mriDepartmentDBDriver.GetAllDepartments();

			JSONSerializer serializer = new JSONSerializer();

			return serializer.exclude("*.class").serialize(departments);

		} catch (Exception e) {
			return e.getMessage();
		}
	}
	
	/**
	 * Register a new department to the system
	 * @param pJson the JSON object that contains details about newly creating department
	 * @return a string value.True if the registration is successful else it returns false
	 */
		@POST
		@Path("/InsertNewDepartment")
		@Produces(MediaType.APPLICATION_JSON)
		@Consumes(MediaType.APPLICATION_JSON)
		public String InsertNewDepartment(JSONObject pJson)
		{
			try {
				System.out.println("New dep add");

					JSONArray data = pJson.getJSONArray("NewDepartment");

					MriDepartment newDepartment= new MriDepartment();

					newDepartment.setDepartmentName(data.getJSONObject(0).getString("DepartmentName"));
					newDepartment.setLocation(data.getJSONObject(0).getString("DepartmentLocation"));
					newDepartment.setLaboratoryCounts(data.getJSONObject(0).getInt("DepartmentLabCount"));
					newDepartment.setNumberOfMlt(data.getJSONObject(0).getInt("DepartmentNoOfMlt"));
					newDepartment.setNumberOfConsultant(data.getJSONObject(0).getInt("DepartmentNoOfConsultant"));
					newDepartment.setContactNo(data.getJSONObject(0).getInt("DepartmentContactNo"));
			
					Session session = SessionFactoryUtil.getSessionFactory().openSession();
					MriEmployee emp = (MriEmployee) session.load(MriEmployee.class, data.getJSONObject(0).getInt("employeeId"));
					newDepartment.setMriEmployee(emp);
					session.close();

					Boolean newDepartmentObject=mriDepartmentDBDriver.InsertNewDepartment(newDepartment);

					String departmentType=data.getJSONObject(0).getString("departmentType");

					System.out.println(departmentType);
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
		/***
		 * Update Department details 
		 * @param pjson is a JSON object which contains new details about the department that need to be updated
		 * @return returns a string value.True if the user updated successfully else it returns false
		 */
		
		@POST
		@Path("/UpdateDepartment")
		@Produces(MediaType.APPLICATION_JSON)
		@Consumes(MediaType.APPLICATION_JSON)
		public String UpdateDepartment(JSONObject pJson) 
		{
			
			try {
				MriDepartment dept =new MriDepartment();
				
				//emp.setEmployeeId(Integer.parseInt(pJson.getJSONObject("obj").getString("employeeId")));
				
				dept.setDepartmentId(Integer.parseInt(pJson.getJSONObject("obj").getString("deptId")));
				dept.setDepartmentName(pJson.getJSONObject("obj").getString("deptName"));
				dept.setLocation(pJson.getJSONObject("obj").getString("deptLocation"));
				dept.setLaboratoryCounts(pJson.getJSONObject("obj").getInt("deptLabCount"));
				dept.setNumberOfMlt(pJson.getJSONObject("obj").getInt("deptNoOfMLT"));
				dept.setNumberOfConsultant(pJson.getJSONObject("obj").getInt("deptNoOfConsultant"));
				dept.setContactNo(pJson.getJSONObject("obj").getInt("deptContactNo"));
				
				
				mriDepartmentDBDriver.UpdateDepartment(dept);
				
				return "True";
				
			} catch (Exception e) {
				e.printStackTrace();
				return e.getMessage().toString();
			}					
		}
		/**
		 * Get all the labs that registered in the system	
		 * @return returns a JSON object that contains all the registered labs
		 */
		
		@GET
		@Path("/GetAllLabs")
		@Produces(MediaType.APPLICATION_JSON)
		public String GetAllLabs() {
			String result="";
			try {
				List<MriLaboratory> labs= mriDepartmentDBDriver.GetAllLabs();

				JSONSerializer serializer = new JSONSerializer();

				return serializer.exclude("*.class").serialize(labs);

			} catch (Exception e) {
				return e.getMessage();
			}
		}
		
		
		
		
		
}
