<style>
/* Modern ERP Card Dashboard Styles */
.dashboard-wrapper {
    padding: 30px;
    background-color: #f8fafc;
    min-height: 100vh;
    font-family: 'Inter', 'Outfit', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
}

.dashboard-title-bar {
    margin-bottom: 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 2px solid #e2e8f0;
    padding-bottom: 15px;
}

.dashboard-title-bar h1 {
    font-size: 28px;
    font-weight: 700;
    color: #1e3a8a;
    margin: 0;
}

.card-grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    gap: 24px;
}

.card-feature {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.02);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    position: relative;
    padding: 30px 24px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 140px;
    text-align: center;
}

.card-feature:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 20px -8px rgba(30, 58, 138, 0.15), 0 4px 6px -2px rgba(30, 58, 138, 0.05);
    border-color: #1e3a8a;
}

.card-feature-icon {
    font-size: 36px;
    color: #1e3a8a;
    margin-bottom: 15px;
    transition: transform 0.3s ease;
}

.card-feature:hover .card-feature-icon {
    transform: scale(1.1);
}

.card-feature h3 {
    font-size: 18px;
    font-weight: 700;
    color: #1e3a8a;
    margin: 0;
}

/* Card Submenu Slide Down */
.card-dropdown-menu {
    display: none;
    width: 100%;
    margin-top: 15px;
    border-top: 1px solid #f1f5f9;
    padding-top: 15px;
    text-align: left;
}

.card-dropdown-menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.card-dropdown-menu ul li {
    margin-bottom: 8px;
}

.card-dropdown-menu ul li a {
    display: block;
    padding: 8px 12px;
    color: #475569;
    font-weight: 600;
    text-decoration: none;
    border-radius: 6px;
    transition: all 0.2s ease;
}

.card-dropdown-menu ul li a:hover {
    background-color: #eff6ff;
    color: #2563eb;
    padding-left: 16px;
}

/* Top Navigation Bar for subpages */
.subpage-navbar {
    background: #ffffff;
    border-bottom: 2px solid #1e3a8a;
    padding: 12px 30px;
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.08);
    font-family: 'Inter', sans-serif;
    align-items: center;
    margin-bottom: 25px;
}

.subpage-navbar-brand {
    font-size: 18px;
    font-weight: 700;
    color: #1e3a8a;
    text-decoration: none;
    margin-right: 20px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.subpage-navbar-brand:hover {
    color: #2563eb;
    text-decoration: none;
}

.subpage-navbar-item {
    position: relative;
}

.subpage-navbar-link {
    background: none;
    border: none;
    padding: 8px 16px;
    font-weight: 600;
    font-size: 14px;
    color: #475569;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.2s;
    display: flex;
    align-items: center;
    gap: 6px;
}

.subpage-navbar-link:hover, .subpage-navbar-item:hover .subpage-navbar-link {
    background: #eff6ff;
    color: #1e3a8a;
    text-decoration: none;
}

.subpage-navbar-dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1050;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    min-width: 240px;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    padding: 8px 0;
    margin-top: 4px;
}

.subpage-navbar-item:hover .subpage-navbar-dropdown {
    display: block;
}

.subpage-navbar-dropdown ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.subpage-navbar-dropdown ul li a {
    display: block;
    padding: 8px 16px;
    color: #475569;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.2s;
    font-size: 13px;
}

.subpage-navbar-dropdown ul li a:hover {
    background: #eff6ff;
    color: #2563eb;
    text-decoration: none;
}
</style>

<noscript>
	<h1>Your browser does not support JavaScript!</h1>
</noscript>

<script>
	document.addEventListener('keydown', function(event) {
		//For Monthly Calculation
		if (event.altKey && event.key === 'F1') {
			<?php if (in_array('viewFeeHeadMaster', permission_data)) { ?>
				window.location.href = "<?php echo site_url("Cmonthly_collection/month_collection") ?>";
			<?php } ?>
		}
		//For Miscellaneous Calculation
		if (event.altKey && event.key === 'F2') {
			<?php if (in_array('viewFeeHeadMaster', permission_data)) { ?>
				window.location.href = "<?php echo site_url("Fees_collection/misc_collection") ?>";
			<?php } ?>
		}
		//For Collection without Adm. No.
		if (event.altKey && event.key === 'F3') {
			<?php if (in_array('viewFeeHeadMaster', permission_data)) { ?>
				window.location.href = "<?php echo site_url("Fees_collection/collection_without_adm") ?>";
			<?php } ?>
		}
		//For Student Information
		if (event.altKey && event.key === 's') {
			<?php if (in_array('viewFeeHeadMaster', permission_data)) { ?>
				window.location.href = "<?php echo site_url("Student_details/student_master") ?>";
			<?php } ?>
		}
	});
</script>

<?php
// Fallback mocks for running card.php standalone (e.g., via php -S localhost:3000)
if (!function_exists('base_url')) {
    function base_url($path = '') {
        return '/' . ltrim($path, '/');
    }
}
if (!function_exists('site_url')) {
    function site_url($path = '') {
        return '/' . ltrim($path, '/');
    }
}
if (!defined('permission_data')) {
    define('permission_data', [
        'viewSchoolSetting', 'viewSession', 'viewHoliday', 'viewRole', 'viewActiveMonth',
        'viewClass', 'viewSection', 'viewAssignSubjectTeacher',
        'viewStudentMaster', 'viewScholarship', 'viewHouseMaster', 'viewCategoryMaster', 'viewWardType', 'viewReligion', 'viewStudentRecordKeeping',
        'viewSchoolCollection', 'viewCanceReprintFeeReceipt', 'cancelReprintBookReceipts', 'transferCardSwipe', 'viewFeeHeadMaster', 'viewFeeGeneration', 'viewLateFineMaster',
        'viewFeeReports', 'viewFeeDefaulterList', 'viewFeeHeadWiseDefaulter', 'viewClassReport', 'viewOtherReport', 'viewAdmitCard', 'viewTermWiseReportCard', 'viewStudentReport',
        'viewTransferCertificate', 'viewCancelReprintTC', 'viewCharacterCertificate', 'viewBonafideCertificate', 'viewDOBCertificate', 'viewTutionFeeCertificate', 'viewFeePaidCertificate',
        'viewEmployeeLeave', 'viewStudentDetails'
    ]);
}

$is_dashboard = true;
if (isset($this) && isset($this->uri)) {
    $segment2 = $this->uri->segment(2);
    $segment3 = $this->uri->segment(3);
    $is_dashboard = ($segment2 == 'dashboard' || $segment3 == 'emp_dashboard' || empty($this->uri->segment(1)));
}

if ($is_dashboard):
?>
<div class="dashboard-wrapper">
    <div class="dashboard-title-bar">
        <h1>Dashboard</h1>
    </div>
    
    <div class="card-grid-container">
        <!-- 1. General Setting -->
        <?php if (in_array('viewSchoolSetting', permission_data) || in_array('viewSession', permission_data) || in_array('viewShift', permission_data) || in_array('viewHoliday', permission_data) || in_array('viewRole', permission_data) || in_array('viewActiveMonth', permission_data)) : ?>
            <div class="card-feature">
                <div class="card-feature-icon"><i class="fa fa-cogs" aria-hidden="true"></i></div>
                <h3>General Setting</h3>
                <div class="card-dropdown-menu">
                    <ul>
                        <?php if (in_array('viewSchoolSetting', permission_data)) { ?>
                            <li><a href="<?php echo base_url('school_master/setting'); ?>">School Setting</a></li>
                        <?php } ?>
                        <?php if (in_array('viewSession', permission_data)) { ?>
                            <li><a href="<?php echo base_url('school_master/setting/sessionView'); ?>">Session Setting</a></li>
                        <?php } ?>
                        <?php if (in_array('viewHoliday', permission_data)) { ?>
                            <li><a href="<?php echo base_url('holiday'); ?>">Holiday Master</a></li>
                        <?php } ?>
                        <?php if (in_array('viewRole', permission_data)) { ?>
                            <li><a href="<?php echo base_url('role_master/role'); ?>">Role Setting</a></li>
                        <?php } ?>
                        <?php if (in_array('viewActiveMonth', permission_data)) { ?>
                            <li><a href="<?php echo base_url('school_master/setting/currentMonth'); ?>">Active Month For Payroll</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        <!-- 2. Academics -->
        <?php if (in_array('viewSection', permission_data) || in_array('viewClass', permission_data) || in_array('viewAssignSubjectTeacher', permission_data) || in_array('viewAssignClassTeacher', permission_data)) : ?>
            <div class="card-feature">
                <div class="card-feature-icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                <h3>Academics</h3>
                <div class="card-dropdown-menu">
                    <ul>
                        <?php if (in_array('viewClass', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Ses/session_change'); ?>">Session Change</a></li>
                            <li><a href="<?php echo base_url('Fees_master/class_master'); ?>">Class Master</a></li>
                        <?php } ?>
                        <?php if (in_array('viewSection', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Fees_master/section_master'); ?>">Section Master</a></li>
                            <li><a href="<?php echo base_url('Teacher_master/clswise_subj_allco'); ?>">Add Subjects</a></li>
                        <?php } ?>
                        <?php if (in_array('viewAssignSubjectTeacher', permission_data)) { ?>
                            <li><a href="<?php echo base_url('timetable/subjectAllocation'); ?>">Allocate Subject Teacher for Class</a></li>
                        <?php } ?>
                        <?php if (in_array('viewAssignSubjectTeacher', permission_data)) { ?>
                            <li><a href="<?php echo base_url('timetable_report/timetablereport/teacherWiseSubjectAllocation'); ?>">Allocated Teacher Report</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        <!-- 3. Student Information -->
        <?php if (in_array('viewStudentMaster', permission_data) || in_array('viewScholarship', permission_data) || in_array('viewHouseMaster', permission_data) || in_array('viewCategoryMaster', permission_data) || in_array('viewWardType', permission_data) || in_array('viewReligion', permission_data) || in_array('viewStudentRecordKeeping', permission_data)) : ?>
            <div class="card-feature">
                <div class="card-feature-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                <h3>Student Information</h3>
                <div class="card-dropdown-menu">
                    <ul>
                        <?php if (in_array('viewHouseMaster', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Fees_master/house_master') ?>">House Master</a></li>
                        <?php } ?>
                        <?php if (in_array('viewCategoryMaster', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Fees_master/Category_master'); ?>">Category Master</a></li>
                        <?php } ?>
                        <?php if (in_array('viewWardType', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Fees_master/ward_master') ?>">Ward Type Master</a></li>
                        <?php } ?>
                        <?php if (in_array('viewReligion', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Fees_master/religion_master') ?>">Religion Master</a></li>
                        <?php } ?>
                        <?php if (in_array('viewStudentMaster', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Student_details/student_master'); ?>">Student Master</a></li>
                            <li><a href="<?php echo base_url('Disabledstudent/index'); ?>">Disabled Student</a></li>
                        <?php } ?>
                        <li><a href="<?php echo base_url('Parentslogincredential/index'); ?>">Parents Login Credential</a></li>
                        <?php if (in_array('viewScholarship', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Student_details/Scholarship'); ?>">Scholarship</a></li>
                        <?php } ?>
                        <?php if (in_array('viewStudentRecordKeeping', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Teacher_master/stu_recored_keeping'); ?>">Student Record Keeping</a></li>
                        <?php } ?>
                        <?php if (in_array('viewStudentMaster', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Student_details/generate_rollno'); ?>">Generate Roll No.</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        <!-- 4. Fees Collection -->
        <?php if (in_array('viewSchoolCollection', permission_data) || in_array('viewCanceReprintFeeReceipt', permission_data) || in_array('cancelReprintBookReceipts', permission_data) || in_array('transferCardSwipe', permission_data) || in_array('viewFeeHeadMaster', permission_data) || in_array('viewFeeGeneration', permission_data) || in_array('viewLateFineMaster', permission_data)) : ?>
            <div class="card-feature">
                <div class="card-feature-icon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                <h3>Fees Collection</h3>
                <div class="card-dropdown-menu">
                    <ul>
                        <?php if (in_array('viewFeeHeadMaster', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Fees_master/fee_head_master'); ?>">Fee Head Master</a></li>
                        <?php } ?>
                        <?php if (in_array('viewFeeHeadMaster', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Cmonthly_collection/month_collection'); ?>">Monthly Fee Collection</a></li>
                        <?php } ?>
                        <?php if (in_array('viewFeeHeadMaster', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Fees_collection/pay_mode_update'); ?>">Change Payment Mode</a></li>
                        <?php } ?>
                        <?php if (in_array('viewFeeHeadMaster', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Fees_collection/misc_collection'); ?>">Miscellaneous Collection</a></li>
                        <?php } ?>
                        <?php if (in_array('viewFeeHeadMaster', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Fees_collection/collection_without_adm'); ?>">Collection Without Admission</a></li>
                        <?php } ?>
                        <?php if (in_array('viewLateFineMaster', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Late_finemaster/late_fine'); ?>">Late Fine Master</a></li>
                        <?php } ?>
                        <?php if (in_array('viewFeeGeneration', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Feegeneration/fee_generation_gui'); ?>">Fee Generation</a></li>
                        <?php } ?>
                        <?php if (in_array('viewCanceReprintFeeReceipt', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Cancel_reprint/cancel_reprintt'); ?>">Cancel/Re-Print Fee Receipts</a></li>
                        <?php } ?>
                        <?php if (in_array('cancelReprintBookReceipts', permission_data)) { ?>
                            <li><a href="icons.html">Cancel/Re-Print Book Receipts</a></li>
                        <?php } ?>
                        <?php if (in_array('transferCardSwipe', permission_data)) { ?>
                            <li><a href="icons.html">Transfer Cash Payment to Card Swipe</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        <!-- 5. Reports -->
        <?php if (in_array('viewFeeReports', permission_data) || in_array('viewFeeDefaulterList', permission_data) || in_array('viewFeeHeadWiseDefaulter', permission_data) || in_array('viewClassReport', permission_data) || in_array('viewOtherReport', permission_data) || in_array('viewAdmitCard', permission_data) || in_array('viewTermWiseReportCard', permission_data) || in_array('viewStudentReport', permission_data)) : ?>
            <div class="card-feature">
                <div class="card-feature-icon"><i class="fa fa-file" aria-hidden="true"></i></div>
                <h3>Reports</h3>
                <div class="card-dropdown-menu">
                    <ul>
                        <?php if (in_array('viewFeeReports', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Report/typeofreports'); ?>" title="Click For Reports">Fee Reports</a></li>
                            <li><a href="<?php echo base_url('Bus_report/show_report') ?>">Bus Reports</a></li>
                        <?php } ?>
                        <?php if (in_array('viewFeeDefaulterList', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Report/Fee_Defaulter_List'); ?>">Fee Defaulter List</a></li>
                            <li><a href="<?php echo base_url('Report/Bank_trans'); ?>">Bank Transaction Report</a></li>
                        <?php } ?>
                        <?php if (in_array('viewFeeDefaulterList', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Report/Fee_Paid_List'); ?>">Fee Paid List</a></li>
                        <?php } ?>
                        <?php if (in_array('viewFeeHeadWiseDefaulter', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Report/Fee_head_Defaulter_List'); ?>">Fee Head Wise Defaulter List</a></li>
                        <?php } ?>
                        <?php if (in_array('viewFeeHeadWiseDefaulter', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Adm_form_sale/adm_form_sale'); ?>">Admission Form Sales Report</a></li>
                        <?php } ?>
                        <?php if (in_array('viewFeeHeadWiseDefaulter', permission_data)) { ?>
                            <li><a href="<?php echo base_url('List_of_Receipt/list_of_rct'); ?>">List Of Receipt Report</a></li>
                        <?php } ?>
                        <?php if (in_array('viewFeeHeadWiseDefaulter', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Ward_report/ward_report'); ?>">Ward Category Report</a></li>
                        <?php } ?>
                        <?php if (in_array('viewClassReport', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Class_report/show_class'); ?>">Class Report</a></li>
                        <?php } ?>
                        <?php if (in_array('viewStudentReport', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Student_report/show_studentpanel'); ?>">Student Report</a></li>
                        <?php } ?>
                        <?php if (in_array('viewOtherReport', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Other_report/show_other_report'); ?>">Other Report</a></li>
                        <?php } ?>
                        <?php if (in_array('viewAdmitCard', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Card/show_other_report'); ?>">Card (Admit Id)</a></li>
                        <?php } ?>
                        <li><a href="<?php echo base_url('Report/pre_Fee_Defaulter_List_reman'); ?>">Previous Year Remaining Defaulter</a></li>
                        <li><a href="<?php echo base_url('Student_strength/show_strenght_religion'); ?>">Religion Strength Report</a></li>
                        <?php if (in_array('viewTermWiseReportCard', permission_data)) { ?>
                            <li><a href="<?php echo base_url('report_card/Report_card/index'); ?>">Term Wise Report Card</a></li>
                            <li><a href="<?php echo base_url('report_card/Annual_report_card'); ?>">Annual Report Card</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        <!-- 6. Audit Reports -->
        <?php if (in_array('viewFeeReports', permission_data) || in_array('viewFeeDefaulterList', permission_data) || in_array('viewFeeHeadWiseDefaulter', permission_data) || in_array('viewClassReport', permission_data)) : ?>
            <div class="card-feature">
                <div class="card-feature-icon"><i class="fa fa-file" aria-hidden="true"></i></div>
                <h3>Audit Reports</h3>
                <div class="card-dropdown-menu">
                    <ul>
                        <?php if (in_array('viewFeeDefaulterList', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Reconcilation'); ?>">Receivable Report</a></li>
                        <?php } ?>
                        <?php if (in_array('viewFeeDefaulterList', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Reconcilation/advance'); ?>">Advance Report</a></li>
                        <?php } ?>
                        <?php if (in_array('viewFeeDefaulterList', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Reconcilation/prev_month_payment'); ?>">Prev. Month Collection Report</a></li>
                        <?php } ?>
                        <?php if (in_array('viewFeeDefaulterList', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Reconcilation/actual'); ?>">Actual Collection Report</a></li>
                        <?php } ?>
                        <?php if (in_array('viewFeeDefaulterList', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Reconcilation/dues'); ?>">Dues Report</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        <!-- 7. Certificate -->
        <?php if (in_array('viewTransferCertificate', permission_data) || in_array('viewCancelReprintTC', permission_data) || in_array('viewCharacterCertificate', permission_data) || in_array('viewBonafideCertificate', permission_data) || in_array('viewDOBCertificate', permission_data) || in_array('viewTutionFeeCertificate', permission_data) || in_array('viewFeePaidCertificate', permission_data)) : ?>
            <div class="card-feature">
                <div class="card-feature-icon"><i class="fa fa-address-card" aria-hidden="true"></i></div>
                <h3>Certificate</h3>
                <div class="card-dropdown-menu">
                    <ul>
                        <?php if (in_array('viewTransferCertificate', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Certificate/transfer_certificate'); ?>" title="Click For Tc">Transfer Certificate (TC)</a></li>
                        <?php } ?>
                        <?php if (in_array('viewCancelReprintTC', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Certificate/cancel_reprint_tc'); ?>" title="Click For Reprint Cancel TC">Cancel Reprint TC</a></li>
                        <?php } ?>
                        <?php if (in_array('viewCharacterCertificate', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Certificate/char_show'); ?>">Character Certificate</a></li>
                        <?php } ?>
                        <?php if (in_array('viewBonafideCertificate', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Bonafide_certificate/show_bonafide'); ?>">Bonafide Certificate</a></li>
                        <?php } ?>
                        <?php if (in_array('viewDOBCertificate', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Date_of_birth_certificate/show_dob'); ?>">Date of Birth Certificate</a></li>
                        <?php } ?>
                        <?php if (in_array('viewTutionFeeCertificate', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Tution_fee_certificate/show_tution'); ?>">Tution Fee Certificate</a></li>
                        <?php } ?>
                        <?php if (in_array('viewFeePaidCertificate', permission_data)) { ?>
                            <li><a href="<?php echo base_url('Fee_paid_all_certificate/show_tution'); ?>">Fee Paid(All) Certificate</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        <!-- 8. Bulk Updation -->
        <?php if (in_array('viewEmployeeLeave', permission_data) || in_array('viewStudentDetails', permission_data) || in_array('viewStudentMaster', permission_data)) : ?>
            <div class="card-feature">
                <div class="card-feature-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                <h3>Bulk Updation</h3>
                <div class="card-dropdown-menu">
                    <ul>
                        <?php if (in_array('viewEmployeeLeave', permission_data)) { ?>
                            <li><a href="<?php echo base_url('bulk_updation/employeeleave'); ?>">Employee Leave</a></li>
                        <?php } ?>
                        <?php if (in_array('viewStudentDetails', permission_data) || in_array('viewStudentMaster', permission_data)) { ?>
                            <li><a href="<?php echo base_url('bulk_updation/Classsecwise'); ?>">Class Sec Wise</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php else: ?>
<!-- Top Horizontal Navbar for subpages -->
<div class="subpage-navbar">
    <a href="<?php echo base_url('payroll/dashboard/emp_dashboard'); ?>" class="subpage-navbar-brand">
        <i class="fa fa-dashboard" aria-hidden="true"></i> ERP Dashboard
    </a>
    
    <!-- 1. General Setting -->
    <?php if (in_array('viewSchoolSetting', permission_data) || in_array('viewSession', permission_data) || in_array('viewShift', permission_data) || in_array('viewHoliday', permission_data) || in_array('viewRole', permission_data) || in_array('viewActiveMonth', permission_data)) : ?>
        <div class="subpage-navbar-item">
            <button class="subpage-navbar-link">
                <i class="fa fa-cogs" aria-hidden="true"></i> General Setting <i class="fa fa-caret-down" aria-hidden="true"></i>
            </button>
            <div class="subpage-navbar-dropdown">
                <ul>
                    <?php if (in_array('viewSchoolSetting', permission_data)) { ?>
                        <li><a href="<?php echo base_url('school_master/setting'); ?>">School Setting</a></li>
                    <?php } ?>
                    <?php if (in_array('viewSession', permission_data)) { ?>
                        <li><a href="<?php echo base_url('school_master/setting/sessionView'); ?>">Session Setting</a></li>
                    <?php } ?>
                    <?php if (in_array('viewHoliday', permission_data)) { ?>
                        <li><a href="<?php echo base_url('holiday'); ?>">Holiday Master</a></li>
                    <?php } ?>
                    <?php if (in_array('viewRole', permission_data)) { ?>
                        <li><a href="<?php echo base_url('role_master/role'); ?>">Role Setting</a></li>
                    <?php } ?>
                    <?php if (in_array('viewActiveMonth', permission_data)) { ?>
                        <li><a href="<?php echo base_url('school_master/setting/currentMonth'); ?>">Active Month For Payroll</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <!-- 2. Academics -->
    <?php if (in_array('viewSection', permission_data) || in_array('viewClass', permission_data) || in_array('viewAssignSubjectTeacher', permission_data) || in_array('viewAssignClassTeacher', permission_data)) : ?>
        <div class="subpage-navbar-item">
            <button class="subpage-navbar-link">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i> Academics <i class="fa fa-caret-down" aria-hidden="true"></i>
            </button>
            <div class="subpage-navbar-dropdown">
                <ul>
                    <?php if (in_array('viewClass', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Ses/session_change'); ?>">Session Change</a></li>
                        <li><a href="<?php echo base_url('Fees_master/class_master'); ?>">Class Master</a></li>
                    <?php } ?>
                    <?php if (in_array('viewSection', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Fees_master/section_master'); ?>">Section Master</a></li>
                        <li><a href="<?php echo base_url('Teacher_master/clswise_subj_allco'); ?>">Add Subjects</a></li>
                    <?php } ?>
                    <?php if (in_array('viewAssignSubjectTeacher', permission_data)) { ?>
                        <li><a href="<?php echo base_url('timetable/subjectAllocation'); ?>">Allocate Subject Teacher for Class</a></li>
                    <?php } ?>
                    <?php if (in_array('viewAssignSubjectTeacher', permission_data)) { ?>
                        <li><a href="<?php echo base_url('timetable_report/timetablereport/teacherWiseSubjectAllocation'); ?>">Allocated Teacher Report</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <!-- 3. Student Information -->
    <?php if (in_array('viewStudentMaster', permission_data) || in_array('viewScholarship', permission_data) || in_array('viewHouseMaster', permission_data) || in_array('viewCategoryMaster', permission_data) || in_array('viewWardType', permission_data) || in_array('viewReligion', permission_data) || in_array('viewStudentRecordKeeping', permission_data)) : ?>
        <div class="subpage-navbar-item">
            <button class="subpage-navbar-link">
                <i class="fa fa-user" aria-hidden="true"></i> Student Information <i class="fa fa-caret-down" aria-hidden="true"></i>
            </button>
            <div class="subpage-navbar-dropdown">
                <ul>
                    <?php if (in_array('viewHouseMaster', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Fees_master/house_master') ?>">House Master</a></li>
                    <?php } ?>
                    <?php if (in_array('viewCategoryMaster', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Fees_master/Category_master'); ?>">Category Master</a></li>
                    <?php } ?>
                    <?php if (in_array('viewWardType', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Fees_master/ward_master') ?>">Ward Type Master</a></li>
                    <?php } ?>
                    <?php if (in_array('viewReligion', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Fees_master/religion_master') ?>">Religion Master</a></li>
                    <?php } ?>
                    <?php if (in_array('viewStudentMaster', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Student_details/student_master'); ?>">Student Master</a></li>
                        <li><a href="<?php echo base_url('Disabledstudent/index'); ?>">Disabled Student</a></li>
                    <?php } ?>
                    <li><a href="<?php echo base_url('Parentslogincredential/index'); ?>">Parents Login Credential</a></li>
                    <?php if (in_array('viewScholarship', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Student_details/Scholarship'); ?>">Scholarship</a></li>
                    <?php } ?>
                    <?php if (in_array('viewStudentRecordKeeping', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Teacher_master/stu_recored_keeping'); ?>">Student Record Keeping</a></li>
                    <?php } ?>
                    <?php if (in_array('viewStudentMaster', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Student_details/generate_rollno'); ?>">Generate Roll No.</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <!-- 4. Fees Collection -->
    <?php if (in_array('viewSchoolCollection', permission_data) || in_array('viewCanceReprintFeeReceipt', permission_data) || in_array('cancelReprintBookReceipts', permission_data) || in_array('transferCardSwipe', permission_data) || in_array('viewFeeHeadMaster', permission_data) || in_array('viewFeeGeneration', permission_data) || in_array('viewLateFineMaster', permission_data)) : ?>
        <div class="subpage-navbar-item">
            <button class="subpage-navbar-link">
                <i class="fa fa-inr" aria-hidden="true"></i> Fees Collection <i class="fa fa-caret-down" aria-hidden="true"></i>
            </button>
            <div class="subpage-navbar-dropdown">
                <ul>
                    <?php if (in_array('viewFeeHeadMaster', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Fees_master/fee_head_master'); ?>">Fee Head Master</a></li>
                    <?php } ?>
                    <?php if (in_array('viewFeeHeadMaster', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Cmonthly_collection/month_collection'); ?>">Monthly Fee Collection</a></li>
                    <?php } ?>
                    <?php if (in_array('viewFeeHeadMaster', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Fees_collection/pay_mode_update'); ?>">Change Payment Mode</a></li>
                    <?php } ?>
                    <?php if (in_array('viewFeeHeadMaster', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Fees_collection/misc_collection'); ?>">Miscellaneous Collection</a></li>
                    <?php } ?>
                    <?php if (in_array('viewFeeHeadMaster', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Fees_collection/collection_without_adm'); ?>">Collection Without Admission</a></li>
                    <?php } ?>
                    <?php if (in_array('viewLateFineMaster', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Late_finemaster/late_fine'); ?>">Late Fine Master</a></li>
                    <?php } ?>
                    <?php if (in_array('viewFeeGeneration', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Feegeneration/fee_generation_gui'); ?>">Fee Generation</a></li>
                    <?php } ?>
                    <?php if (in_array('viewCanceReprintFeeReceipt', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Cancel_reprint/cancel_reprintt'); ?>">Cancel/Re-Print Fee Receipts</a></li>
                    <?php } ?>
                    <?php if (in_array('cancelReprintBookReceipts', permission_data)) { ?>
                        <li><a href="icons.html">Cancel/Re-Print Book Receipts</a></li>
                    <?php } ?>
                    <?php if (in_array('transferCardSwipe', permission_data)) { ?>
                        <li><a href="icons.html">Transfer Cash Payment to Card Swipe</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <!-- 5. Reports -->
    <?php if (in_array('viewFeeReports', permission_data) || in_array('viewFeeDefaulterList', permission_data) || in_array('viewFeeHeadWiseDefaulter', permission_data) || in_array('viewClassReport', permission_data) || in_array('viewOtherReport', permission_data) || in_array('viewAdmitCard', permission_data) || in_array('viewTermWiseReportCard', permission_data) || in_array('viewStudentReport', permission_data)) : ?>
        <div class="subpage-navbar-item">
            <button class="subpage-navbar-link">
                <i class="fa fa-file" aria-hidden="true"></i> Reports <i class="fa fa-caret-down" aria-hidden="true"></i>
            </button>
            <div class="subpage-navbar-dropdown">
                <ul>
                    <?php if (in_array('viewFeeReports', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Report/typeofreports'); ?>">Fee Reports</a></li>
                        <li><a href="<?php echo base_url('Bus_report/show_report') ?>">Bus Reports</a></li>
                    <?php } ?>
                    <?php if (in_array('viewFeeDefaulterList', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Report/Fee_Defaulter_List'); ?>">Fee Defaulter List</a></li>
                        <li><a href="<?php echo base_url('Report/Bank_trans'); ?>">Bank Transaction Report</a></li>
                    <?php } ?>
                    <?php if (in_array('viewFeeDefaulterList', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Report/Fee_Paid_List'); ?>">Fee Paid List</a></li>
                    <?php } ?>
                    <?php if (in_array('viewFeeHeadWiseDefaulter', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Report/Fee_head_Defaulter_List'); ?>">Fee Head Wise Defaulter List</a></li>
                    <?php } ?>
                    <?php if (in_array('viewFeeHeadWiseDefaulter', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Adm_form_sale/adm_form_sale'); ?>">Admission Form Sales Report</a></li>
                    <?php } ?>
                    <?php if (in_array('viewFeeHeadWiseDefaulter', permission_data)) { ?>
                        <li><a href="<?php echo base_url('List_of_Receipt/list_of_rct'); ?>">List Of Receipt Report</a></li>
                    <?php } ?>
                    <?php if (in_array('viewFeeHeadWiseDefaulter', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Ward_report/ward_report'); ?>">Ward Category Report</a></li>
                    <?php } ?>
                    <?php if (in_array('viewClassReport', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Class_report/show_class'); ?>">Class Report</a></li>
                    <?php } ?>
                    <?php if (in_array('viewStudentReport', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Student_report/show_studentpanel'); ?>">Student Report</a></li>
                    <?php } ?>
                    <?php if (in_array('viewOtherReport', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Other_report/show_other_report'); ?>">Other Report</a></li>
                    <?php } ?>
                    <?php if (in_array('viewAdmitCard', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Card/show_other_report'); ?>">Card (Admit Id)</a></li>
                    <?php } ?>
                    <li><a href="<?php echo base_url('Report/pre_Fee_Defaulter_List_reman'); ?>">Previous Year Remaining Defaulter</a></li>
                    <li><a href="<?php echo base_url('Student_strength/show_strenght_religion'); ?>">Religion Strength Report</a></li>
                    <?php if (in_array('viewTermWiseReportCard', permission_data)) { ?>
                        <li><a href="<?php echo base_url('report_card/Report_card/index'); ?>">Term Wise Report Card</a></li>
                        <li><a href="<?php echo base_url('report_card/Annual_report_card'); ?>">Annual Report Card</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <!-- 6. Audit Reports -->
    <?php if (in_array('viewFeeReports', permission_data) || in_array('viewFeeDefaulterList', permission_data) || in_array('viewFeeHeadWiseDefaulter', permission_data) || in_array('viewClassReport', permission_data)) : ?>
        <div class="subpage-navbar-item">
            <button class="subpage-navbar-link">
                <i class="fa fa-file" aria-hidden="true"></i> Audit Reports <i class="fa fa-caret-down" aria-hidden="true"></i>
            </button>
            <div class="subpage-navbar-dropdown">
                <ul>
                    <?php if (in_array('viewFeeDefaulterList', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Reconcilation'); ?>">Receivable Report</a></li>
                    <?php } ?>
                    <?php if (in_array('viewFeeDefaulterList', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Reconcilation/advance'); ?>">Advance Report</a></li>
                    <?php } ?>
                    <?php if (in_array('viewFeeDefaulterList', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Reconcilation/prev_month_payment'); ?>">Prev. Month Collection Report</a></li>
                    <?php } ?>
                    <?php if (in_array('viewFeeDefaulterList', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Reconcilation/actual'); ?>">Actual Collection Report</a></li>
                    <?php } ?>
                    <?php if (in_array('viewFeeDefaulterList', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Reconcilation/dues'); ?>">Dues Report</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <!-- 7. Certificate -->
    <?php if (in_array('viewTransferCertificate', permission_data) || in_array('viewCancelReprintTC', permission_data) || in_array('viewCharacterCertificate', permission_data) || in_array('viewBonafideCertificate', permission_data) || in_array('viewDOBCertificate', permission_data) || in_array('viewTutionFeeCertificate', permission_data) || in_array('viewFeePaidCertificate', permission_data)) : ?>
        <div class="subpage-navbar-item">
            <button class="subpage-navbar-link">
                <i class="fa fa-address-card" aria-hidden="true"></i> Certificate <i class="fa fa-caret-down" aria-hidden="true"></i>
            </button>
            <div class="subpage-navbar-dropdown">
                <ul>
                    <?php if (in_array('viewTransferCertificate', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Certificate/transfer_certificate'); ?>">Transfer Certificate (TC)</a></li>
                    <?php } ?>
                    <?php if (in_array('viewCancelReprintTC', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Certificate/cancel_reprint_tc'); ?>">Cancel Reprint TC</a></li>
                    <?php } ?>
                    <?php if (in_array('viewCharacterCertificate', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Certificate/char_show'); ?>">Character Certificate</a></li>
                    <?php } ?>
                    <?php if (in_array('viewBonafideCertificate', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Bonafide_certificate/show_bonafide'); ?>">Bonafide Certificate</a></li>
                    <?php } ?>
                    <?php if (in_array('viewDOBCertificate', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Date_of_birth_certificate/show_dob'); ?>">Date of Birth Certificate</a></li>
                    <?php } ?>
                    <?php if (in_array('viewTutionFeeCertificate', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Tution_fee_certificate/show_tution'); ?>">Tution Fee Certificate</a></li>
                    <?php } ?>
                    <?php if (in_array('viewFeePaidCertificate', permission_data)) { ?>
                        <li><a href="<?php echo base_url('Fee_paid_all_certificate/show_tution'); ?>">Fee Paid(All) Certificate</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <!-- 8. Bulk Updation -->
    <?php if (in_array('viewEmployeeLeave', permission_data) || in_array('viewStudentDetails', permission_data) || in_array('viewStudentMaster', permission_data)) : ?>
        <div class="subpage-navbar-item">
            <button class="subpage-navbar-link">
                <i class="fa fa-globe" aria-hidden="true"></i> Bulk Updation <i class="fa fa-caret-down" aria-hidden="true"></i>
            </button>
            <div class="subpage-navbar-dropdown">
                <ul>
                    <?php if (in_array('viewEmployeeLeave', permission_data)) { ?>
                        <li><a href="<?php echo base_url('bulk_updation/employeeleave'); ?>">Employee Leave</a></li>
                    <?php } ?>
                    <?php if (in_array('viewStudentDetails', permission_data) || in_array('viewStudentMaster', permission_data)) { ?>
                        <li><a href="<?php echo base_url('bulk_updation/Classsecwise'); ?>">Class Sec Wise</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php endif; ?>

<!-- Submenu Toggle Javascript -->
<script>
$(document).ready(function() {
    $('.card-feature').on('click', function(e) {
        // If the click is on a link, let it go through
        if ($(e.target).closest('a').length) {
            return;
        }
        
        var $submenu = $(this).find('.card-dropdown-menu');
        
        // Collapse all other submenus
        $('.card-dropdown-menu').not($submenu).slideUp();
        $('.card-feature').not(this).removeClass('active');
        
        // Toggle current submenu
        $submenu.slideToggle();
        $(this).toggleClass('active');
    });
});
</script>
