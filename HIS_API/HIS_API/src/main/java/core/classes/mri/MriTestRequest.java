package core.classes.mri;// default package
// Generated Sep 6, 2015 6:20:37 PM by Hibernate Tools 3.4.0.CR1

import java.util.Date;
import java.util.HashSet;
import java.util.Set;

/**
 * MriTestRequest generated by hbm2java
 */
public class MriTestRequest implements java.io.Serializable {

	private Integer testRequestId;
	private MriSpecimen mriSpecimen;
	private MriHospitalPatient mriHospitalPatient;
	private MriBundle mriBundle;
	private MriPatient mriPatient;
	private MriLaboratoryTest mriLaboratoryTest;
	private int increment;
	private String requestId;
	private boolean isHospitalPatient;
	private String comments;
	private String testPriority;
	private String testRequestType;
	private Date testRequestDate;
	private Date testDueDate;
	private int status;
	private Set mriParentResults = new HashSet(0);
	private Set mriSubFieldResults = new HashSet(0);
	private Set mriBinaryResults = new HashSet(0);
	private int requestedBy;

	public Set getMriBinaryResults() {
		return mriBinaryResults;
	}

	public void setMriBinaryResults(Set mriBinaryResults) {
		this.mriBinaryResults = mriBinaryResults;
	}

	public MriTestRequest() {
	}

	public MriTestRequest(MriPatient mriPatient,
			MriLaboratoryTest mriLaboratoryTest, int increment,
			String requestId, boolean isHospitalPatient, Date testRequestDate,
			Date testDueDate ,int requestedBy) {
		this.mriPatient = mriPatient;
		this.mriLaboratoryTest = mriLaboratoryTest;
		this.increment = increment;
		this.requestId = requestId;
		this.isHospitalPatient = isHospitalPatient;
		this.testRequestDate = testRequestDate;
		this.testDueDate = testDueDate;
		this.requestedBy=requestedBy;
	}

	public MriTestRequest(MriSpecimen mriSpecimen,
			MriHospitalPatient mriHospitalPatient, MriBundle mriBundle,
			MriPatient mriPatient, MriLaboratoryTest mriLaboratoryTest,
			int increment, String requestId, boolean isHospitalPatient,
			String comments, String testPriority, String testRequestType,
			Date testRequestDate, Date testDueDate, int status,
			Set mriParentResults, Set mriSubFieldResults,int requestedBy) {
		this.mriSpecimen = mriSpecimen;
		this.mriHospitalPatient = mriHospitalPatient;
		this.mriBundle = mriBundle;
		this.mriPatient = mriPatient;
		this.mriLaboratoryTest = mriLaboratoryTest;
		this.increment = increment;
		this.requestId = requestId;
		this.isHospitalPatient = isHospitalPatient;
		this.comments = comments;
		this.testPriority = testPriority;
		this.testRequestType = testRequestType;
		this.testRequestDate = testRequestDate;
		this.testDueDate = testDueDate;
		this.status = status;
		this.mriParentResults = mriParentResults;
		this.mriSubFieldResults = mriSubFieldResults;
		this.requestedBy=requestedBy;
	}

	public Integer getTestRequestId() {
		return this.testRequestId;
	}

	public void setTestRequestId(Integer testRequestId) {
		this.testRequestId = testRequestId;
	}

	public MriSpecimen getMriSpecimen() {
		return this.mriSpecimen;
	}

	public void setMriSpecimen(MriSpecimen mriSpecimen) {
		this.mriSpecimen = mriSpecimen;
	}

	public MriHospitalPatient getMriHospitalPatient() {
		return this.mriHospitalPatient;
	}

	public void setMriHospitalPatient(MriHospitalPatient mriHospitalPatient) {
		this.mriHospitalPatient = mriHospitalPatient;
	}

	public MriBundle getMriBundle() {
		return this.mriBundle;
	}

	public void setMriBundle(MriBundle mriBundle) {
		this.mriBundle = mriBundle;
	}

	public MriPatient getMriPatient() {
		return this.mriPatient;
	}

	public void setMriPatient(MriPatient mriPatient) {
		this.mriPatient = mriPatient;
	}

	public MriLaboratoryTest getMriLaboratoryTest() {
		return this.mriLaboratoryTest;
	}

	public void setMriLaboratoryTest(MriLaboratoryTest mriLaboratoryTest) {
		this.mriLaboratoryTest = mriLaboratoryTest;
	}

	public int getIncrement() {
		return this.increment;
	}

	public void setIncrement(int increment) {
		this.increment = increment;
	}

	public String getRequestId() {
		return this.requestId;
	}

	public void setRequestId(String requestId) {
		this.requestId = requestId;
	}

	public boolean isIsHospitalPatient() {
		return this.isHospitalPatient;
	}

	public void setIsHospitalPatient(boolean isHospitalPatient) {
		this.isHospitalPatient = isHospitalPatient;
	}

	public String getComments() {
		return this.comments;
	}

	public void setComments(String comments) {
		this.comments = comments;
	}

	public String getTestPriority() {
		return this.testPriority;
	}

	public void setTestPriority(String testPriority) {
		this.testPriority = testPriority;
	}

	public String getTestRequestType() {
		return this.testRequestType;
	}

	public void setTestRequestType(String testRequestType) {
		this.testRequestType = testRequestType;
	}

	public Date getTestRequestDate() {
		return this.testRequestDate;
	}

	public void setTestRequestDate(Date testRequestDate) {
		this.testRequestDate = testRequestDate;
	}

	public Date getTestDueDate() {
		return this.testDueDate;
	}

	public void setTestDueDate(Date testDueDate) {
		this.testDueDate = testDueDate;
	}

	public boolean isHospitalPatient() {
		return isHospitalPatient;
	}

	public void setHospitalPatient(boolean isHospitalPatient) {
		this.isHospitalPatient = isHospitalPatient;
	}

	public int getStatus() {
		return status;
	}

	public void setStatus(int status) {
		this.status = status;
	}

	public Set getMriParentResults() {
		return this.mriParentResults;
	}

	public void setMriParentResults(Set mriParentResults) {
		this.mriParentResults = mriParentResults;
	}

	public Set getMriSubFieldResults() {
		return this.mriSubFieldResults;
	}

	public void setMriSubFieldResults(Set mriSubFieldResults) {
		this.mriSubFieldResults = mriSubFieldResults;
	}

	public int getRequestedBy() {
		return requestedBy;
	}

	public void setRequestedBy(int requestedBy) {
		this.requestedBy = requestedBy;
	}



}