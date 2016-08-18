package lib.driver.api.driver_class.dba;

import lib.SessionFactoryUtil;

import org.hibernate.Session;


/**
 * DbaDBDriver class contains all the CRUD operation methods that required by UserDBDriver Class(web service)
 * @author Kanchana
 *
 */

public class DbaDBDriver {
	
	Session session = SessionFactoryUtil.getSessionFactory().openSession();
	
	

}
