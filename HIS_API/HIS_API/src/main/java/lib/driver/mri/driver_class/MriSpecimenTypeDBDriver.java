package lib.driver.mri.driver_class;

import java.util.List;

import lib.SessionFactoryUtil;

import org.hibernate.HibernateException;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.Transaction;

import core.classes.mri.MriDepartment;
import core.classes.mri.MriLaboratoryTest;
import core.classes.mri.MriPatient;
import core.classes.mri.MriSpecimen;
import core.classes.mri.MriSpecimenType;
import core.classes.mri.MriUserRoles;

/**
 * MriSpecimenTypeDBDriver class contains all the CRUD operation methods that required by SpecimenType class(web service)
 *
 */
public class MriSpecimenTypeDBDriver {

	Session session = SessionFactoryUtil.getSessionFactory().openSession();
	Transaction tx = null;
	/**
	 * Select all inserted specimen types from the database
	 * @return returns a specimen type java List for the calling method
	 */

	public List<MriSpecimenType> GetSMriSpecimenType() {
		tx = session.beginTransaction();

		Query query = session.createQuery("from MriSpecimenType");
		List<MriSpecimenType> mriSpecimenTypeList = query.list();
		tx.commit();

		return mriSpecimenTypeList;
	}

	/**
	 * Insert a new specimen type into the database
	 */
	
	public boolean addMriSpecimenTypeInformation(MriSpecimenType mriSpecimenType) {

		Transaction tx = null;
		try {
			tx = session.beginTransaction();
			System.out.println("beginTransaction MriSpecimenType");
			session.save(mriSpecimenType);

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
	/***
	 * Select all inserted specimen types from the database by specimen type ID
	 * @param specimenTypeID is an integer variable that contain specimen type ID
	 * @return returns a specimen type java List for the calling method
	 */

	public MriSpecimen GetSpecimenByID(int specimentID) {

		tx = null;
		tx = session.beginTransaction();

		MriSpecimen speciment = (MriSpecimen) session.get(MriSpecimen.class,
				specimentID);
		System.out.println("Speciment Mee : " + specimentID);

		tx.commit();

		// session.close();
		return speciment;
	}

	public List<MriSpecimen> getSpecimenDetailsByRequestID(int mriTestRequestid) {
		Transaction tx = null;
		try {
			tx = session.beginTransaction();
			String hql = "select v from MriSpecimen as v where v.mriTestRequests.testRequestId=:mriTestRequestID";
			Query query = session.createQuery(hql);
			query.setParameter("mriTestRequestID", mriTestRequestid);

			List<MriSpecimen> specimensList = query.list();
			tx.commit();
			return specimensList;

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

	public MriSpecimenType GetSpecimenTypeByID(int specimenTypeId) {

		tx = null;

		tx = session.beginTransaction();

		MriSpecimenType mriSpecimenTypes = (MriSpecimenType) session.get(
				MriSpecimenType.class, specimenTypeId);

		tx.commit();

		return mriSpecimenTypes;

	}
	/***
	 * Insert updated data of a particular specimen type into the database.
	 * @param ur is a MriSpecimen type object that contains data about updating specimen type
	 * @return a boolean value. Returns true if user details updated Successfully else returns false
	 */
	public boolean UpdateSpecimenType(MriSpecimenType ur) {
		System.out.println("Hello___________________________");
		Transaction tx=null;
		
		int specimenTypeId= ur.getSpecimenTypeId();
		System.out.println("Specimen Type ID"+specimenTypeId );
		
		try {
			//System.out.println(emp.getTitle());
			tx= session.beginTransaction();
			MriSpecimenType updateUr=(MriSpecimenType) session.get(MriSpecimenType.class, specimenTypeId);
			
			updateUr.setSpecimenName(ur.getSpecimenName());
			System.out.println("Specimen name"+ ur.getSpecimenName());
			
			session.update(updateUr);
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
