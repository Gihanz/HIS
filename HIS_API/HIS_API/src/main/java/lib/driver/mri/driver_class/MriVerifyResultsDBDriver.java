package lib.driver.mri.driver_class;

import java.util.List;

import lib.SessionFactoryUtil;

import org.hibernate.Criteria;
import org.hibernate.HibernateException;
import org.hibernate.Query;
import org.hibernate.SQLQuery;
import org.hibernate.Session;
import org.hibernate.Transaction;

import core.classes.mri.MriBinaryResults;
import core.classes.mri.MriTestRequest;

//Kanchana 
// 2016 - 06 - 05 
//Consultant verify results entered 

public class MriVerifyResultsDBDriver {
	//Status 1 means results entered
	public List GetTestRequests() {
		Session session = SessionFactoryUtil.getSessionFactory().openSession();
		Transaction tx = null;
		tx = session.beginTransaction();

		String sql = "SELECT * FROM mri_test_request r, mri_laboratory_test l, mri_patient p ,mri_binary_results b where r.flaboratory_test_id=l.laboratory_test_id and"
				+ " r.fpatient_id=p.patient_id and r.test_request_id=b.ftest_request_id and l.is_binary=1 and r.status=1";
		
		SQLQuery query = session.createSQLQuery(sql);
		query.setResultTransformer(Criteria.ALIAS_TO_ENTITY_MAP);
		List results = query.list();
		
		tx.commit();

		return results;
	}
	//Status 1 means results entered
	public List GetTestRequestForPeriod(String start,String end) {
		Session session = SessionFactoryUtil.getSessionFactory().openSession();
		Transaction tx = null;
		tx = session.beginTransaction();

		String sql = "SELECT * FROM mri_test_request r, mri_laboratory_test l, mri_patient p ,mri_binary_results b where r.status=1 and r.flaboratory_test_id=l.laboratory_test_id and"
				+ " r.fpatient_id=p.patient_id and r.test_request_id=b.ftest_request_id and l.is_binary=1 and test_request_date>='"+start+"' and test_request_date<='"+end+" and r.status=1'";
		
		SQLQuery query = session.createSQLQuery(sql);
		query.setResultTransformer(Criteria.ALIAS_TO_ENTITY_MAP);
		List results = query.list();
		
		tx.commit();

		return results;
	}
	//Verify Results -Set Status to 2 and if Re-eveluate set 3
	public boolean addSingleVerifyResults(MriBinaryResults result,int resultID,int VerifyStatus) {
		Session session = SessionFactoryUtil.getSessionFactory().openSession();
		
		Transaction tx = null;
	
		tx = session.beginTransaction();
		try{
			System.out.println("Result ID"+resultID);
			MriBinaryResults results = (MriBinaryResults) session.load(MriBinaryResults.class,resultID);
			results.setVerifiedBy(result.getVerifiedBy());
			results.setResultComment(result.getResultComment());
			session.update(results);	
			//changes 28/06/16
			MriTestRequest req = (MriTestRequest) session.load(MriTestRequest.class, result.getMriTestRequest().getTestRequestId());
			req.setStatus(result.getMriTestRequest().getStatus());
			if(VerifyStatus==3){
				req.setComments(result.getMriTestRequest().getComments());
			}
			session.update(req);
			
			tx.commit();
			System.out.println("testing\n\n"+result.getMriTestRequest().getTestRequestId());
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
	//No need for Verify results
	public void updateRequestTable(int reqId) {
		Session session = SessionFactoryUtil.getSessionFactory().openSession();
		MriTestRequest req = (MriTestRequest) session.load(MriTestRequest.class, reqId);
		req.setStatus(1);
		session.update(req);
		//return true;
	}
	
	//No need for Verify results
	public List GetCompletedTestRequestsForPeriod(String start,String end) {
		Session session = SessionFactoryUtil.getSessionFactory().openSession();
		Transaction tx = null;
		tx = session.beginTransaction();

		String sql = "SELECT * FROM mri_test_request r, mri_laboratory_test l, mri_patient p where r.flaboratory_test_id=l.laboratory_test_id and"
				+ " r.fpatient_id=p.patient_id and l.is_binary=1 and r.status=1 and test_request_date>='"+start+"' and test_request_date<='"+end+"'";
		
		SQLQuery query = session.createSQLQuery(sql);
		query.setResultTransformer(Criteria.ALIAS_TO_ENTITY_MAP);
		List results = query.list();
		
		tx.commit();

		return results;
	}
	//No need for Verify results
	public List GetCompletedTestRequests() {
		Session session = SessionFactoryUtil.getSessionFactory().openSession();
		Transaction tx = null;
		tx = session.beginTransaction();

		String sql = "SELECT * FROM mri_test_request r, mri_laboratory_test l, mri_patient p where r.flaboratory_test_id=l.laboratory_test_id and"
				+ " r.fpatient_id=p.patient_id and l.is_binary=1 and r.status=1";
		
		SQLQuery query = session.createSQLQuery(sql);
		query.setResultTransformer(Criteria.ALIAS_TO_ENTITY_MAP);
		List results = query.list();
		
		tx.commit();

		return results;
	}
	//No need for Verify results
	public List GetSingleTestRequestData(int reqid) {
		Session session = SessionFactoryUtil.getSessionFactory().openSession();
		Transaction tx = null;
		tx = session.beginTransaction();

		String sql = "SELECT * FROM mri_test_request r, mri_laboratory_test l, mri_patient p, mri_laboratory lb, mri_binary_results re where r.flaboratory_test_id=l.laboratory_test_id and"
				+ " r.fpatient_id=p.patient_id and lb.laboratory_id=l.flaboratory_id and re.ftest_request_id=r.test_request_id and  l.is_binary=1 and r.status=1";
		
		SQLQuery query = session.createSQLQuery(sql);
		query.setResultTransformer(Criteria.ALIAS_TO_ENTITY_MAP);
		List results = query.list();
		
		tx.commit();

		return results;
	}
}
