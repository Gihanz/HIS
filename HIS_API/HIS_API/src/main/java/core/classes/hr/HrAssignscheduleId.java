package core.classes.hr;

// default package
// Generated Aug 26, 2014 4:29:26 PM by Hibernate Tools 4.0.0

/**
 * HrAssignscheduleId generated by hbm2java
 */
public class HrAssignscheduleId implements java.io.Serializable {

	private int empId;
	private int shiftId;

	public HrAssignscheduleId() {
	}

	public HrAssignscheduleId(int empId, int shiftId) {
		this.empId = empId;
		this.shiftId = shiftId;
	}

	public int getEmpId() {
		return this.empId;
	}

	public void setEmpId(int empId) {
		this.empId = empId;
	}

	public int getShiftId() {
		return this.shiftId;
	}

	public void setShiftId(int shiftId) {
		this.shiftId = shiftId;
	}

	public boolean equals(Object other) {
		if ((this == other))
			return true;
		if ((other == null))
			return false;
		if (!(other instanceof HrAssignscheduleId))
			return false;
		HrAssignscheduleId castOther = (HrAssignscheduleId) other;

		return (this.getEmpId() == castOther.getEmpId())
				&& (this.getShiftId() == castOther.getShiftId());
	}

	public int hashCode() {
		int result = 17;

		result = 37 * result + this.getEmpId();
		result = 37 * result + this.getShiftId();
		return result;
	}

}
