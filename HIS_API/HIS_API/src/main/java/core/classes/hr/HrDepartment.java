package core.classes.hr;

// default package
// Generated Aug 25, 2014 2:45:14 PM by Hibernate Tools 4.0.0

import java.util.HashSet;
import java.util.Set;

/**
 * HrDepartment generated by hbm2java
 */
public class HrDepartment implements java.io.Serializable {

	private Integer deptId;
	private HrEmployee hrEmployee; // class ekama store karagannawa foreign key nisa
	private String deptName;
	private Set hrWorkins = new HashSet(0);
	private Set hrShifttimeses = new HashSet(0);

	public HrDepartment() {
	}

	public HrDepartment(String deptName) {
		this.deptName = deptName;
	}

	public HrDepartment(HrEmployee hrEmployee, String deptName, Set hrWorkins,
			Set hrShifttimeses) {
		this.hrEmployee = hrEmployee;
		this.deptName = deptName;
		this.hrWorkins = hrWorkins;
		this.hrShifttimeses = hrShifttimeses;
	}

	public Integer getDeptId() {
		return this.deptId;
	}

	public void setDeptId(Integer deptId) {
		this.deptId = deptId;
	}

	public HrEmployee getHrEmployee() {
		return this.hrEmployee;
	}

	public void setHrEmployee(HrEmployee hrEmployee) {
		this.hrEmployee = hrEmployee;
	}

	public String getDeptName() {
		return this.deptName;
	}

	public void setDeptName(String deptName) {
		this.deptName = deptName;
	}

	public Set getHrWorkins() {
		return this.hrWorkins;
	}

	public void setHrWorkins(Set hrWorkins) {
		this.hrWorkins = hrWorkins;
	}

	public Set getHrShifttimeses() {
		return this.hrShifttimeses;
	}

	public void setHrShifttimeses(Set hrShifttimeses) {
		this.hrShifttimeses = hrShifttimeses;
	}

}
