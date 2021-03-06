// default package
// Generated Jul 17, 2013 11:31:01 AM by Hibernate Tools 3.4.0.CR1
package core.classes.pharmacy;
import java.util.Date;
import java.util.HashSet;
import java.util.Set;

/**
 * MstDrugsNew generated by hbm2java
 */
public class MstDrugsNew implements java.io.Serializable {

	private Integer dSrNo;
	private String dName;
	private String dRemarks;
	private Date dCreateDate;
	private int dCreateUser;
	private Date dLastUpdate;
	private int dLastUpdateUser;
	private Boolean dActive;
	private String dUnit;
	private Double dPrice;
	
	private Integer dQty;
	private Integer statusReOrder;
	private Integer statusDanger;
	private MstDrugCategory categories;
	
	private Set<TrnDrugsSupplied> supp = new HashSet<TrnDrugsSupplied>(0);
	private Set<TrnDispenseDrugs> dispense = new HashSet<TrnDispenseDrugs>(0);
	private Set<TrnRequestDrugs> request = new HashSet<TrnRequestDrugs>(0);
	private Set<MstDrugFrequency> frequencies = new HashSet<MstDrugFrequency>(0);
	private Set<MstDrugDosage> dosages = new HashSet<MstDrugDosage>(0);
	
	
	
	
	public MstDrugsNew() {
	}
	
	public MstDrugsNew(String DName) {
		this.dName = DName;
	}



	public Integer getdSrNo() {
		return dSrNo;
	}

	public void setdSrNo(Integer dSrNo) {
		this.dSrNo = dSrNo;
	}

	public String getdName() {
		return dName;
	}

	public void setdName(String dName) {
		this.dName = dName;
	}

	public String getdRemarks() {
		return dRemarks;
	}

	public void setdRemarks(String dRemarks) {
		this.dRemarks = dRemarks;
	}

	public Date getdCreateDate() {
		return dCreateDate;
	}

	public void setdCreateDate(Date dCreateDate) {
		this.dCreateDate = dCreateDate;
	}



	public Date getdLastUpdate() {
		return dLastUpdate;
	}

	public void setdLastUpdate(Date dLastUpdate) {
		this.dLastUpdate = dLastUpdate;
	}



	public int getdCreateUser() {
		return dCreateUser;
	}

	public void setdCreateUser(int dCreateUser) {
		this.dCreateUser = dCreateUser;
	}

	public int getdLastUpdateUser() {
		return dLastUpdateUser;
	}

	public void setdLastUpdateUser(int dLastUpdateUser) {
		this.dLastUpdateUser = dLastUpdateUser;
	}

	public Boolean getdActive() {
		return dActive;
	}

	public void setdActive(Boolean dActive) {
		this.dActive = dActive;
	}

	public String getdUnit() {
		return dUnit;
	}

	public void setdUnit(String dUnit) {
		this.dUnit = dUnit;
	}

	public Double getdPrice() {
		return dPrice;
	}

	public void setdPrice(Double dPrice) {
		this.dPrice = dPrice;
	}

	public Integer getdQty() {
		return dQty;
	}

	public void setdQty(Integer dQty) {
		this.dQty = dQty;
	}

	public Integer getStatusReOrder() {
		return statusReOrder;
	}

	public void setStatusReOrder(Integer statusReOrder) {
		this.statusReOrder = statusReOrder;
	}

	public Integer getStatusDanger() {
		return statusDanger;
	}

	public void setStatusDanger(Integer statusDanger) {
		this.statusDanger = statusDanger;
	}

	public MstDrugCategory getCategories() {
		return categories;
	}

	public void setCategories(MstDrugCategory categories) {
		this.categories = categories;
	}

	public Set<TrnDrugsSupplied> getSupp() {
		return supp;
	}

	public void setSupp(Set<TrnDrugsSupplied> supp) {
		this.supp = supp;
	}

	public Set<TrnDispenseDrugs> getDispense() {
		return dispense;
	}

	public void setDispense(Set<TrnDispenseDrugs> dispense) {
		this.dispense = dispense;
	}

	public Set<TrnRequestDrugs> getRequest() {
		return request;
	}

	public void setRequest(Set<TrnRequestDrugs> request) {
		this.request = request;
	}

	public Set<MstDrugFrequency> getFrequencies() {
		return frequencies;
	}

	public void setFrequencies(Set<MstDrugFrequency> frequencies) {
		this.frequencies = frequencies;
	}

	public Set<MstDrugDosage> getDosages() {
		return dosages;
	}

	public void setDosages(Set<MstDrugDosage> dosages) {
		this.dosages = dosages;
	}



	

	
	
		
}
