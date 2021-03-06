package lib.driver.lims.driver_class;

import lib.SessionFactoryUtil;

import org.hibernate.HibernateException;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.Transaction;

import java.util.Collection;
import java.util.List;

import core.classes.api.user.AdminUser;
import core.classes.lims.Category;
import core.classes.lims.LabDepartments;

import core.classes.lims.LabTestRequest;
import core.classes.lims.LabTypes;
import core.classes.lims.Laboratories;

import core.classes.lims.SampleCenterTypes;
import core.classes.lims.SampleCenters;
import core.classes.lims.SubCategory;
import core.classes.lims.TestFieldsRange;
import core.classes.opd.OutPatient;

public class LaboratoriesDBDriver {

	Session session = SessionFactoryUtil.getSessionFactory().openSession();
	
	public boolean insertNewLab(Laboratories lab, int labTypeID, int labDepartmentID, int userid) {

		Transaction tx = null;
		try {
			tx = session.beginTransaction();
			
			LabTypes lLabType = (LabTypes)session.get(LabTypes.class, labTypeID);
			LabDepartments lDeptsType = (LabDepartments)session.get(LabDepartments.class, labDepartmentID);
			
			AdminUser user = (AdminUser) session.get(AdminUser.class, userid);
			
			lab.setFlabType_ID(lLabType);
			lab.setFlabDept_ID(lDeptsType);
			
			lab.setFlabLast_UpdatedUserID(user);
			lab.setFlab_AddedUserID(user);
	
			session.save(lab);
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
	
	
	/**
	 * This method retrieve a list of laboratory tests currently available in the system
	 * 
	 * @return lab test list List<TestNames>
	 * @throws Method
	 *             throws a {@link RuntimeException} in failing the return,
	 *             throws a {@link HibernateException} on error rolling back
	 *             transaction.
	 */
	public List<Laboratories> getNewLabsList() {
		Transaction tx = null;
		try {
			//catID = 2;
			tx = session.beginTransaction();
			Query query = session.createQuery("select l from Laboratories l" );
			//query.setParameter("catID", catID);
			List<Laboratories> labList = query.list();
			tx.commit();
			return labList;
		} catch (RuntimeException ex) {
			if (tx != null && tx.isActive()) {
				try {
					tx.rollback();
				} catch (HibernateException he) {
					System.err.println("Error rolling back transaction");
				}
				throw ex;
			}
			return null;
		}
	}
	
	public Laboratories getLabID(int id) {
		Transaction tx = null;
		try {
			tx = session.beginTransaction();
			Query query = session.createQuery("select l from Laboratories l where l.lab_ID="+id);
			List<Laboratories> labList = query.list();
			if (labList.size() == 0)
				return null;
			tx.commit();
			return (Laboratories)labList.get(0);
		} catch (RuntimeException ex) {
			if (tx != null && tx.isActive()) {
				try {
					tx.rollback();
				} catch (HibernateException he) {
					System.err.println("Error rolling back transaction");
				}
				throw ex;
			}
			return null;
		}
	}
	

	public List<Laboratories> getLaboratoriesByLabType(int typeID) {
		Transaction tx = null;
		try {

			tx = session.beginTransaction();
			Query query = session.createQuery("select t from LabTypes as t where t.labType_ID=:typeID");
			query.setParameter("typeID", typeID);
			List<LabTypes> testList = query.list();
			LabTypes catObject=testList.get(0);
			tx.commit();

			tx = session.beginTransaction();
			Query query1 = session.createQuery("select l from Laboratories as l where l.flabType_ID=:catObj");
			query1.setParameter("catObj", catObject);
			List<Laboratories> testList1 = query1.list();
			tx.commit();
			return testList1;
			
			
			
		} catch (RuntimeException ex) {
			if (tx != null && tx.isActive()) {
				try {
					tx.rollback();
				} catch (HibernateException he) {
					System.err.println("Error rolling back transaction");
				}
				throw ex;
			}
			return null;
		}
	}

}
