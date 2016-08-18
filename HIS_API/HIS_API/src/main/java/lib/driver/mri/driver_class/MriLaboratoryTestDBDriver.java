package lib.driver.mri.driver_class;

import java.util.List;

import lib.SessionFactoryUtil;

import org.hibernate.HibernateException;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.Transaction;

import core.classes.mri.MriDepartment;
import core.classes.mri.MriLaboratoryTest;
import core.classes.mri.MriSpecimen;
import core.classes.mri.MriTestRequest;

public class MriLaboratoryTestDBDriver {
	
	Session session=SessionFactoryUtil.getSessionFactory().openSession();
	Transaction tx = null;
	
	public List<MriLaboratoryTest> GetAllLabTests() {
		tx = session.beginTransaction();
		
		Query query = session.createQuery("Select t.laboratoryTestId, t.testFullName, t.testShortName from MriLaboratoryTest t");
		List<MriLaboratoryTest> testRequests= query.list();
		tx.commit();
		
		return testRequests;
	}
	
	public MriLaboratoryTest GetLabTestByID(int labTestID) {
			
			tx=null;
			
			tx= session.beginTransaction();
			MriLaboratoryTest labTest=(MriLaboratoryTest) session.get(MriLaboratoryTest.class, labTestID);
			
			tx.commit();
			
			//session.close();
			return labTest;
	}
	
	/***
	 * Insert updated data of a particular department into the database.
	 * @param dept is a Department object that contains data about updating department
	 * @return a boolean value. Returns true if department details updated Successfully else returns false
	 */
	public boolean UpdateLaboratoryTest(MriLaboratoryTest labTest) {
		Transaction tx=null;
		
		int labTestId= labTest.getLaboratoryTestId();
		
		
		try {
			//System.out.println(emp.getTitle());
			tx= session.beginTransaction();
			MriLaboratoryTest updatelabTest =(MriLaboratoryTest) session.get(MriLaboratoryTest.class, labTestId);
			
			updatelabTest.setLaboratoryTestId(labTest.getLaboratoryTestId());			
		//	updatelabTest.setDepartmentName(labTest.getDepartmentName());
		//	updatelabTest.setMriLaboratory(labTest.getDepartmentName());
		//	updatelabTest.setMriSpecimenType(labTest.getDepartmentName());			
			updatelabTest.setTestFullName(labTest.getTestFullName());
			updatelabTest.setTestShortName(labTest.getTestShortName());
			updatelabTest.setIsBinary(labTest.getIsBinary());
			updatelabTest.setDefultTestComment(labTest.getDefultTestComment());
			updatelabTest.setTestUnit(labTest.getTestUnit());
			
			session.update(updatelabTest);
			tx.commit();
			return true;
			
		} catch (RuntimeException ex) {
			if (tx != null && tx.isActive()) {
				try {
					tx.rollback();
				} catch (HibernateException he) {
					System.err.println("Error rolling back transaction");
				}
				throw ex;
			}
			return false;
		}
		
	}
}
