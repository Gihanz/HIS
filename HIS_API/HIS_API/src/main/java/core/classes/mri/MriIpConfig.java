package core.classes.mri;

// default package
// Generated May 13 29016 3:37:57 PM by Hibernate Tools 3.4.0.CR1

/**
 * MriIpConfig generated by Kanchana
 */
public class MriIpConfig implements java.io.Serializable {

	private Integer ipConfigId;
	private String ipConfigIp;
	private String isActive;

	public MriIpConfig() {
	}

	public MriIpConfig( String ipConfigIp, String isActive) {
		this.setIpConfigIp(ipConfigIp);
		this.setIsActive(isActive);
	}

	public Integer getIpConfigId() {
		return ipConfigId;
	}

	public void setIpConfigId(Integer ipConfigId) {
		this.ipConfigId = ipConfigId;
	}

	public String getIpConfigIp() {
		return ipConfigIp;
	}

	public void setIpConfigIp(String ipConfigIp) {
		this.ipConfigIp = ipConfigIp;
	}

	public String getIsActive() {
		return isActive;
	}

	public void setIsActive(String isActive) {
		this.isActive = isActive;
	}




}
