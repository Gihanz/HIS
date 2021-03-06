package core.classes.mri;// default package
// Generated Sep 6, 2015 6:20:37 PM by Hibernate Tools 3.4.0.CR1

/**
 * MriParentResult generated by hbm2java
 */
public class MriParentResult implements java.io.Serializable {

	private Integer parentResultId;
	private MriTestParentFields mriTestParentFields;
	private MriTestRequest mriTestRequest;
	private String parentResultValue;

	public MriParentResult() {
	}

	public MriParentResult(String parentResultValue) {
		this.parentResultValue = parentResultValue;
	}

	public MriParentResult(MriTestParentFields mriTestParentFields,
			MriTestRequest mriTestRequest, String parentResultValue) {
		this.mriTestParentFields = mriTestParentFields;
		this.mriTestRequest = mriTestRequest;
		this.parentResultValue = parentResultValue;
	}

	public Integer getParentResultId() {
		return this.parentResultId;
	}

	public void setParentResultId(Integer parentResultId) {
		this.parentResultId = parentResultId;
	}

	public MriTestParentFields getMriTestParentFields() {
		return this.mriTestParentFields;
	}

	public void setMriTestParentFields(MriTestParentFields mriTestParentFields) {
		this.mriTestParentFields = mriTestParentFields;
	}

	public MriTestRequest getMriTestRequest() {
		return this.mriTestRequest;
	}

	public void setMriTestRequest(MriTestRequest mriTestRequest) {
		this.mriTestRequest = mriTestRequest;
	}

	public String getParentResultValue() {
		return this.parentResultValue;
	}

	public void setParentResultValue(String parentResultValue) {
		this.parentResultValue = parentResultValue;
	}

}
