package core.classes.mri;// default package
// Generated Sep 6, 2015 6:20:37 PM by Hibernate Tools 3.4.0.CR1

import java.util.HashSet;
import java.util.Set;

/**
 * MriLaboratoryTest generated by hbm2java
 */
public class MriLaboratoryTest implements java.io.Serializable {

	private Integer laboratoryTestId;
	private MriLaboratory mriLaboratory;
	private String testFullName;
	private String testShortName;
	private int isBinary; //New
	private Set mriTestParentFieldses = new HashSet(0);
	private Set mriTestRequests = new HashSet(0);
	
	// Added Comment Kanchana
	private String defultTestComment;
	private String testUnit;
	private MriSpecimenType mriSpecimenType;

	public int getIsBinary() {
		return isBinary;
	}

	public void setIsBinary(int isBinary) {
		this.isBinary = isBinary;
	}

	public MriLaboratoryTest() {
	}

	public MriLaboratoryTest(MriLaboratory mriLaboratory, String testFullName,
			String testShortName, int isBinary, MriSpecimenType mriSpecimenType) {
		this.mriLaboratory = mriLaboratory;
		this.testFullName = testFullName;
		this.testShortName = testShortName;
		this.isBinary = isBinary;
		this.mriSpecimenType = mriSpecimenType;
	}

	public MriLaboratoryTest(MriLaboratory mriLaboratory, String testFullName,
			String testShortName, Set mriTestParentFieldses, Set mriTestRequests,String defultTestComment,String testUnit,MriSpecimenType mriSpecimenType) {
		this.mriLaboratory = mriLaboratory;
		this.testFullName = testFullName;
		this.testShortName = testShortName;
		this.mriTestParentFieldses = mriTestParentFieldses;
		this.mriTestRequests = mriTestRequests;
		this.defultTestComment= defultTestComment;
		this.testUnit= testUnit;
		this.mriSpecimenType= mriSpecimenType;
	}

	public Integer getLaboratoryTestId() {
		return this.laboratoryTestId;
	}

	public void setLaboratoryTestId(Integer laboratoryTestId) {
		this.laboratoryTestId = laboratoryTestId;
	}

	public MriLaboratory getMriLaboratory() {
		return this.mriLaboratory;
	}

	public void setMriLaboratory(MriLaboratory mriLaboratory) {
		this.mriLaboratory = mriLaboratory;
	}

	public String getTestFullName() {
		return this.testFullName;
	}

	public void setTestFullName(String testFullName) {
		this.testFullName = testFullName;
	}

	public String getTestShortName() {
		return this.testShortName;
	}

	public void setTestShortName(String testShortName) {
		this.testShortName = testShortName;
	}

	public Set getMriTestParentFieldses() {
		return this.mriTestParentFieldses;
	}

	public void setMriTestParentFieldses(Set mriTestParentFieldses) {
		this.mriTestParentFieldses = mriTestParentFieldses;
	}

	public Set getMriTestRequests() {
		return this.mriTestRequests;
	}

	public void setMriTestRequests(Set mriTestRequests) {
		this.mriTestRequests = mriTestRequests;
	}

	public String getDefultTestComment() {
		return defultTestComment;
	}

	public void setDefultTestComment(String defultTestComment) {
		this.defultTestComment = defultTestComment;
	}
	
	public String getTestUnit() {
		return testUnit;
	}

	public void setTestUnit(String testUnit) {
		this.testUnit = testUnit;
	}
	
	public MriSpecimenType getMriSpecimenType() {
		return this.mriSpecimenType;
	}

	public void setMriSpecimenType(MriSpecimenType mriSpecimenType) {
		this.mriSpecimenType = mriSpecimenType;
	}

}