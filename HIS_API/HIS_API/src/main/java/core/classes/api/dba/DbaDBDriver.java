package core.classes.api.dba;
import java.util.HashSet;
import java.util.Set;
import core.classes.hr.*;;

/**
 * AdminUser generated by hbm2java
 */
public class DbaDBDriver implements java.io.Serializable {

	private Integer arcId;
	private String arcName;
	//private Set adminPermissionrequestsForRequester = new HashSet(0);
	//private Set adminPermissionrequestsForApprover = new HashSet(0);

	public DbaDBDriver() {
	}

	public DbaDBDriver(String arcName) {
		this.setArcName(arcName);

	}

	public Integer getArcId() {
		return arcId;
	}

	public void setArcId(Integer arcId) {
		this.arcId = arcId;
	}

	public String getArcName() {
		return arcName;
	}

	public void setArcName(String arcName) {
		this.arcName = arcName;
	}

/*	public AdminUser(AdminUserroles adminUserroles, HrEmployee hrEmployee,
			String userName, String password, boolean isActive,
			Set adminPermissionrequestsForRequester,
			Set adminPermissionrequestsForApprover) {
		this.adminUserroles = adminUserroles;
		this.hrEmployee = hrEmployee;
		this.userName = userName;
		this.password = password;
		this.isActive = isActive;
		this.adminPermissionrequestsForRequester = adminPermissionrequestsForRequester;
		this.adminPermissionrequestsForApprover = adminPermissionrequestsForApprover;
	}
*/
	

/*	public Set getAdminPermissionrequestsForRequester() {
		return this.adminPermissionrequestsForRequester;
	}

	public void setAdminPermissionrequestsForRequester(
			Set adminPermissionrequestsForRequester) {
		this.adminPermissionrequestsForRequester = adminPermissionrequestsForRequester;
	}

	public Set getAdminPermissionrequestsForApprover() {
		return this.adminPermissionrequestsForApprover;
	}

	public void setAdminPermissionrequestsForApprover(
			Set adminPermissionrequestsForApprover) {
		this.adminPermissionrequestsForApprover = adminPermissionrequestsForApprover;
	}
*/
}
