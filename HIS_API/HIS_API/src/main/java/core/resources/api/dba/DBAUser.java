package core.resources.api.dba;

import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;



import org.codehaus.jettison.json.JSONException;
import org.codehaus.jettison.json.JSONObject;



/**
 * UserService class contains all the rest-full web methods regarding AdminUser
 * @author MIYURU
 *
 */

@Path("DBAUser")
public class DBAUser {
	
	/***
	 * 
	 * Delete a particular user from the system with that users credential data
	 * @param jsnObj is JSON object that contains data about user that going to delete
	 * @return returns a string value.True if the user deleted successfully else it returns false
	 */	
	
	@POST
	@Path("/deleteUser")
	@Produces(MediaType.TEXT_PLAIN)
	@Consumes(MediaType.APPLICATION_JSON)
	public  String makeArchieveScript(JSONObject jsnObj){
		String result="false";
		boolean r=false;
		// AdminUser usrObj=new AdminUser();
		
		
		try{
			result="done";
			//usrObj.setUserId(jsnObj.getInt("userId"));
						
						
			//r=userDBDriver.deleteUser(usrObj);
			//result=String.valueOf(r);
			
			return result;
			
			
		}
		
		catch(Exception ex){
			ex.printStackTrace();	
			return result;
		}
		
		
	}

}
