package core.classes.mri;

import java.util.HashSet;
import java.util.Set;

public class MriBinaryResults {
	private int resultId;
	private String resultValue;
	private String resultComment;
	private MriTestRequest mriTestRequest;
	private MriUser enteredBy;
	private MriUser verifiedBy;
	public int getResultId() {
		return resultId;
	}
	public void setResultId(int resultId) {
		this.resultId = resultId;
	}
	public String getResultValue() {
		return resultValue;
	}
	public void setResultValue(String resultValue) {
		this.resultValue = resultValue;
	}
	public MriTestRequest getMriTestRequest() {
		return mriTestRequest;
	}
	public void setMriTestRequest(MriTestRequest mriTestRequest) {
		this.mriTestRequest = mriTestRequest;
	}
	public MriBinaryResults(int resultId, String resultValue,
			MriTestRequest mriTestRequest) {
		super();
		this.resultId = resultId;
		this.resultValue = resultValue;
		this.mriTestRequest = mriTestRequest;
	}
	public MriBinaryResults(int resultId, String resultValue,
			MriTestRequest mriTestRequest,String resultComment,MriUser enteredBy ,MriUser verifiedBy) {
		super();
		this.resultId = resultId;
		this.resultValue = resultValue;
		this.mriTestRequest = mriTestRequest;
		this.resultComment = resultComment;
		this.setEnteredBy(enteredBy);
		this.setVerifiedBy(verifiedBy);
	}
	public MriBinaryResults() {
	}
	public String getResultComment() {
		return resultComment;
	}
	public void setResultComment(String resultComment) {
		this.resultComment = resultComment;
	}
	public MriUser getEnteredBy() {
		return enteredBy;
	}
	public void setEnteredBy(MriUser enteredBy) {
		this.enteredBy = enteredBy;
	}
	public MriUser getVerifiedBy() {
		return verifiedBy;
	}
	public void setVerifiedBy(MriUser verifiedBy) {
		this.verifiedBy = verifiedBy;
	}

}
