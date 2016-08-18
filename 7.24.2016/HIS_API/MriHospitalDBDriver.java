package lib.driver.mri.driver_class;

import java.util.List;

import lib.SessionFactoryUtil;

import org.hibernate.HibernateException;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.Transaction;

import core.classes.hr.HrEmployee;
import core.classes.mri.MriHospital;
import core.classes.mri.MriLaboratoryTest;
import core.classes.mri.MriPatient;


public class MriHospitalDBDriver {
	
	Session session=SessionFactoryUtil.getSessionFactory().openSession();
	Transaction tx = null;
	
	public List<MriHospital> GetAllHospitals() {

		tx = session.beginTransaction();
		
		Query query = session.createQuery("from MriHospital");
		List<MriHospital> hospitals= query.list();
		tx.commit();
		
		return hospitals;
	}



	public List<MriHospital> GetHospitalById(int hospitalID) {		

		Transaction tx = null;
		tx = session.beginTransaction();

		Query query = session.createQuery("from MriHospital e where e.hospitalId = '"+hospitalID+"'");
		List<MriHospital> hospitalList= query.list();
		tx.commit();
		

		return hospitalList;
	}



	public MriHospital GetHospitalObject(int hospitalID) {

		Transaction tx = null;	
		tx= session.beginTransaction();
		
		MriHospital hospitalO=(MriHospital) session.get(MriHospital.class, hospitalID);
		
		tx.commit();
		
		
		
		return hospitalO;
	}
	
	/***
	 * Insert updated data of a particular hospital into the database.
	 * @return a boolean value. Returns true if hospital details updated Successfully else returns false
	 */
	public boolean UpdateHospital(MriHospital hos) {

		Transaction tx = null;

		
		int hospitalId= hos.getHospitalId();
		
		
		try {
			//System.out.println(emp.getTitle());
			tx= session.beginTransaction();
			MriHospital updatehospital =(MriHospital) session.get(MriHospital.class, hospitalId);
			
			updatehospital.setHospitalId(hos.getHospitalId());						
			updatehospital.setHospitalName(hos.getHospitalName());
			updatehospital.setAddress(hos.getAddress());
			updatehospital.setLocation(hos.getLocation());
			updatehospital.setContactNo1(hos.getContactNo1());
			updatehospital.setContactNo2(hos.getContactNo2());
			
			session.update(updatehospital);
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
	
	public boolean InsertNewHospital(MriHospital newHospital) {
		Transaction tx=null;
		
		try{
			tx = session.beginTransaction();
			session.save(newHospital);			
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
