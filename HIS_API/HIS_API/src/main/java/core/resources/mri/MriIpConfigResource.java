package core.resources.mri;

import java.security.NoSuchAlgorithmException;
import java.security.spec.InvalidKeySpecException;
import java.util.List;

import javax.ws.rs.Consumes;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

import lib.SessionFactoryUtil;
import lib.classes.securitymodel.encryption.DataHashing;
import lib.driver.mri.driver_class.MriDepartmentDBDriver;
import lib.driver.mri.driver_class.MriIpConfigDriver;
import lib.driver.mri.driver_class.MriUserDBDriver;

import org.codehaus.jettison.json.JSONArray;
import org.codehaus.jettison.json.JSONObject;
import org.hibernate.Session;

import core.classes.api.user.AdminUser;
import core.classes.mri.MriEmployee;
import core.classes.mri.MriHospitalPatient;
import core.classes.mri.MriPatient;
import core.classes.mri.MriUser;
import core.classes.mri.MriUserRoles;
import core.classes.mri.MriIpConfig;
import flexjson.JSONException;
import flexjson.JSONSerializer;

@Path("MriIpConfig")
public class MriIpConfigResource {
	
	MriUserDBDriver mriUserDBDriver= new MriUserDBDriver();
	MriIpConfigDriver mriIpConfigDriver  = new MriIpConfigDriver();
	
	DataHashing dataHashing = new DataHashing();
	
	@POST
	@Path("/registerUser")
	@Produces(MediaType.APPLICATION_JSON)
	@Consumes(MediaType.APPLICATION_JSON)
	public  String registerUser( JSONObject uJson)
	{
		try {

			JSONArray data = uJson.getJSONArray("NewUser");

			MriUser newUser = new MriUser();
			
			Session session1 = SessionFactoryUtil.getSessionFactory().openSession();
			MriEmployee emp = (MriEmployee) session1.load(MriEmployee.class, data.getJSONObject(0).getInt("employeeId"));
			newUser.setMriEmployee(emp);
			session1.close();
			
			Session session2 = SessionFactoryUtil.getSessionFactory().openSession();
			MriUserRoles uRoles = (MriUserRoles) session2.load(MriUserRoles.class, data.getJSONObject(0).getInt("roleName"));
			newUser.setMriUserRoles(uRoles);
			session2.close();
			
			newUser.setUserName(data.getJSONObject(0).getString("userName"));
			newUser.setPassword(data.getJSONObject(0).getString("Password"));
			newUser.setPassword(dataHashing.createHash(data.getJSONObject(0).getString("Password")));
			
			Boolean newUserObject=mriUserDBDriver.registerUser(newUser);

			String userType=data.getJSONObject(0).getString("userType");

			System.out.println(userType);

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
	
	
	//Update User Role and password Reset provide trough this function 
	@POST
	@Path("/updateUser")
	@Produces(MediaType.APPLICATION_JSON)
	@Consumes(MediaType.APPLICATION_JSON)
	public  String updateUser(JSONObject uJson)
	{
		try {

			JSONArray data = uJson.getJSONArray("updateUser");
			String para1 =uJson.getString("condition") ;
			int roleID=-1;

			MriUser newUser = new MriUser();
			
			System.out.println("Update User role and password");
		
			Session session2 = SessionFactoryUtil.getSessionFactory().openSession();
			newUser.setUserId(data.getJSONObject(0).getInt("userId"));
			if(para1.equals("role")){
				roleID = data.getJSONObject(0).getInt("roleName");
				System.out.println("Print user RoleID"+roleID);
				MriUserRoles uRoles = (MriUserRoles) session2.load(MriUserRoles.class, roleID);
				newUser.setMriUserRoles(uRoles);
				session2.close();
			}
			if(para1.equals("password")){
			newUser.setPassword(data.getJSONObject(0).getString("Password"));
			newUser.setPassword(dataHashing.createHash(data.getJSONObject(0).getString("Password")));
			session2.close();
			}
			
			
			Boolean newUserObject=mriUserDBDriver.updateUserDetail(newUser, para1,roleID);	

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
	
	//Ip validation
	@POST
	@Path("/ipValidation")
	@Produces(MediaType.APPLICATION_JSON)
	@Consumes(MediaType.APPLICATION_JSON)
	public  String ipValidation(JSONObject jsnObj) throws org.codehaus.jettison.json.JSONException{
		
		//boolean r=false;
		System.out.println("IP Validation");
		System.out.println(jsnObj);
	MriIpConfig config = new MriIpConfig();
		try{
				
			config.setIpConfigIp(jsnObj.getString("input_ip"));
			
			List<MriIpConfig> ipList=mriIpConfigDriver.validateUserIp();
				
			JSONSerializer serializor=new JSONSerializer();
			
			String result = serializor.include("ipConfigIp","isActive").exclude("*").serialize(ipList);
			//String result = serializor.serialize("'response':'false'");
			
			 for(MriIpConfig model : ipList) {
		            if((model.getIpConfigIp().toString()).equals(jsnObj.getString("input_ip").toString())){
						//result = serializor.serialize("'response':'true'");
		            	result = serializor.include("ipConfigIp","isActive").exclude("*").serialize(ipList);
						System.out.println("IP lIst"+model.getIpConfigIp().toString()+"TRUE");   
		           }
		        }
			return result;
		}
		catch(JSONException ex){
			ex.printStackTrace();
			return null;
		}
		
	}

}
