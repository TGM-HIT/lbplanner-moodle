<?php
// This file is part of the LB Planner plugin.
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


defined('MOODLE_INTERNAL') || die();

$functions = array(
    'local_lbplanner_user_get_user' => array(
        'classname' => 'local_lbplanner_services\user_get_user',
        'methodname' => 'get_user',
        'classpath' => 'local/lbplanner/services/user/get_user.php',
        'description' => 'Get the data for a user',
        'type' => 'read',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_user_get_all_users' => array(
        'classname' => 'local_lbplanner_services\user_get_all_users',
        'methodname' => 'get_all_users',
        'classpath' => 'local/lbplanner/services/user/get_all_users.php',
        'description' => 'Gets all users registered by the lbplanner app',
        'type' => 'read',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_user_register_user' => array(
        'classname' => 'local_lbplanner_services\user_register_user',
        'methodname' => 'register_user',
        'classpath' => 'local/lbplanner/services/user/register_user.php',
        'description' => 'Register a new user in the lbplanner app',
        'type' => 'write',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_user_update_user' => array(
        'classname' => 'local_lbplanner_services\user_update_user',
        'methodname' => 'update_user',
        'classpath' => 'local/lbplanner/services/user/update_user.php',
        'description' => 'Update the data for a user',
        'type' => 'write',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_courses_get_course' => array(
        'classname' => 'local_lbplanner_services\courses_get_course',
        'methodname' => 'get_course',
        'classpath' => 'local/lbplanner/services/courses/get_course.php',
        'description' => 'Get the data for a course',
        'type' => 'read',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_courses_get_all_courses' => array(
        'classname' => 'local_lbplanner_services\courses_get_all_courses',
        'methodname' => 'get_all_courses',
        'classpath' => 'local/lbplanner/services/courses/get_all_courses.php',
        'description' => 'Get all the courses of the current year',
        'type' => 'read',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_courses_update_course' => array(
        'classname' => 'local_lbplanner_services\courses_update_course',
        'methodname' => 'update_course',
        'classpath' => 'local/lbplanner/services/courses/update_course.php',
        'description' => 'Update the data for a course',
        'type' => 'write',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_modules_get_module' => array(
        'classname' => 'local_lbplanner_services\modules_get_module',
        'methodname' => 'get_module',
        'classpath' => 'local/lbplanner/services/modules/get_module.php',
        'description' => 'Get the data for a module',
        'type' => 'read',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_modules_get_all_modules' => array(
        'classname' => 'local_lbplanner_services\modules_get_all_modules',
        'methodname' => 'get_all_modules',
        'classpath' => 'local/lbplanner/services/modules/get_all_modules.php',
        'description' => 'Get all the modules of the current year',
        'type' => 'read',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_modules_get_all_course_modules' => array(
        'classname' => 'local_lbplanner_services\modules_get_all_course_modules',
        'methodname' => 'get_all_course_modules',
        'classpath' => 'local/lbplanner/services/modules/get_all_course_modules.php',
        'description' => 'Get all the modules of the given course',
        'type' => 'read',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_plan_clear_plan' => array(
        'classname' => 'local_lbplanner_services\plan_clear_plan',
        'methodname' => 'clear_plan',
        'classpath' => 'local/lbplanner/services/plan/clear_plan.php',
        'description' => 'Clear the plan for the given user',
        'type' => 'write',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_plan_get_plan' => array(
        'classname' => 'local_lbplanner_services\plan_get_plan',
        'methodname' => 'get_plan',
        'classpath' => 'local/lbplanner/services/plan/get_plan.php',
        'description' => 'Get the plan of the given user',
        'type' => 'read',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_plan_invite_user' => array(
        'classname' => 'local_lbplanner_services\plan_invite_user',
        'methodname' => 'invite_user',
        'classpath' => 'local/lbplanner/services/plan/invite_user.php',
        'description' => 'Invite a user to the plan',
        'type' => 'write',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_plan_remove_user' => array(
        'classname' => 'local_lbplanner_services\plan_remove_user',
        'methodname' => 'remove_user',
        'classpath' => 'local/lbplanner/services/plan/remove_user.php',
        'description' => 'Remove a user from the plan',
        'type' => 'write',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_plan_update_plan' => array(
        'classname' => 'local_lbplanner_services\plan_update_plan',
        'methodname' => 'update_plan',
        'classpath' => 'local/lbplanner/services/plan/update_plan.php',
        'description' => 'Update the plan of the given user',
        'type' => 'write',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_plan_leave_plan' => array(
        'classname' => 'local_lbplanner_services\plan_leave_plan',
        'methodname' => 'leave_plan',
        'classpath' => 'local/lbplanner/services/plan/leave_plan.php',
        'description' => 'Leave the plan of the given user',
        'type' => 'write',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_plan_add_deadline' => array(
        'classname' => 'local_lbplanner_services\plan_add_deadline',
        'methodname' => 'add_deadline',
        'classpath' => 'local/lbplanner/services/plan/add_deadline.php',
        'description' => 'Add a deadline to the plan',
        'type' => 'write',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_plan_delete_deadline' => array(
        'classname' => 'local_lbplanner_services\plan_delete_deadline',
        'methodname' => 'delete_deadline',
        'classpath' => 'local/lbplanner/services/plan/delete_deadline.php',
        'description' => 'Delete a deadline from the plan',
        'type' => 'write',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_user_delete_user' => array(
        'classname' => 'local_lbplanner_services\user_delete_user',
        'methodname' => 'delete_user',
        'classpath' => 'local/lbplanner/services/user/delete_user.php',
        'description' => 'Removes all user data stored by the lbplanner app',
        'type' => 'write',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_plan_update_deadline' => array(
        'classname' => 'local_lbplanner_services\plan_update_deadline',
        'methodname' => 'update_deadline',
        'classpath' => 'local/lbplanner/services/plan/update_deadline.php',
        'description' => 'Update a deadline from the plan',
        'type' => 'write',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_plan_get_access' => array(
        'classname' => 'local_lbplanner_services\plan_get_access',
        'methodname' => 'get_access',
        'classpath' => 'local/lbplanner/services/plan/get_access.php',
        'description' => 'Get the access type to the plan',
        'type' => 'read',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_plan_update_access' => array(
        'classname' => 'local_lbplanner_services\plan_update_access',
        'methodname' => 'update_access',
        'classpath' => 'local/lbplanner/services/plan/update_access.php',
        'description' => 'Update the access of the plan',
        'type' => 'write',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_plan_get_invites' => array(
        'classname' => 'local_lbplanner_services\plan_get_invites',
        'methodname' => 'get_invites',
        'classpath' => 'local/lbplanner/services/plan/get_invites.php',
        'description' => 'Get all the invites of the given user',
        'type' => 'read',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_notifications_get_all_notifications' => array(
        'classname' => 'local_lbplanner_services\notifications_get_all_notifications',
        'methodname' => 'get_all_notifications',
        'classpath' => 'local/lbplanner/services/notifications/get_all_notifications.php',
        'description' => 'Get all the notifications of the given user',
        'type' => 'read',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_notifications_update_notification' => array(
        'classname' => 'local_lbplanner_services\notifications_update_notification',
        'methodname' => 'update_notification',
        'classpath' => 'local/lbplanner/services/notifications/update_notification.php',
        'description' => 'Update the notification status of the given user and id',
        'type' => 'write',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_feedback_submit_feedback' => array(
        'classname' => 'local_lbplanner_services\feedback_submit_feedback',
        'methodname' => 'submit_feedback',
        'classpath' => 'local/lbplanner/services/feedback/submit_feedback.php',
        'description' => 'Add a feedback to the DB',
        'type' => 'write',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_feedback_get_feedback' => array(
        'classname' => 'local_lbplanner_services\feedback_get_feedback',
        'methodname' => 'get_feedback',
        'classpath' => 'local/lbplanner/services/feedback/get_feedback.php',
        'description' => 'Get the feedback of the given id',
        'type' => 'read',
        'capabilities' => '',
        'ajax' => true,
    ),
    'local_lbplanner_feedback_get_all_feedbacks' => array(
        'classname' => 'local_lbplanner_services\feedback_get_all_feedbacks',
        'methodname' => 'get_all_feedbacks',
        'classpath' => 'local/lbplanner/services/feedback/get_all_feedbacks.php',
        'description' => 'Get all the feedback from the DB',
        'type' => 'read',
        'capabilities' => '',
        'ajax' => true,
    ),
    'local_lbplanner_feedback_update_feedback' => array(
        'classname' => 'local_lbplanner_services\feedback_update_feedback',
        'methodname' => 'update_feedback',
        'classpath' => 'local/lbplanner/services/feedback/update_feedback.php',
        'description' => 'Update the feedback of the given id',
        'type' => 'write',
        'capabilities' => '',
        'ajax' => true,
    ),
    'local_lbplanner_feedback_delete_feedback' => array(
        'classname' => 'local_lbplanner_services\feedback_delete_feedback',
        'methodname' => 'delete_feedback',
        'classpath' => 'local/lbplanner/services/feedback/delete_feedback.php',
        'description' => 'Delete the feedback of the given id',
        'type' => 'write',
        'capabilities' => '',
        'ajax' => true,
    ),
    'local_lbplanner_plan_accept_invite' => array(
        'classname' => 'local_lbplanner_services\plan_accept_invite',
        'methodname' => 'accept_invite',
        'classpath' => 'local/lbplanner/services/plan/accept_invite.php',
        'description' => 'Accept the invite of the given id',
        'type' => 'write',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_plan_decline_invite' => array(
        'classname' => 'local_lbplanner_services\plan_decline_invite',
        'methodname' => 'decline_invite',
        'classpath' => 'local/lbplanner/services/plan/decline_invite.php',
        'description' => 'Decline the invite of the given id',
        'type' => 'write',
        'capabilities' => 'local/lb_planner:student',
        'ajax' => true,
    ),
    'local_lbplanner_config_get_version' => array(
        'classname' => 'local_lbplanner_services\config_get_version',
        'methodname' => 'get_version',
        'classpath' => 'local/lbplanner/services/config/get_version.php',
        'description' => 'Get the version of the plugin',
        'type' => 'read',
        'capabilities' => '',
        'ajax' => true,
    ),
);

$services = array(
    'LB Planner API' => array(
        'functions' => array(
            'local_lbplanner_user_get_user',
            'local_lbplanner_user_get_all_users',
            'local_lbplanner_user_register_user',
            'local_lbplanner_user_update_user',
            'local_lbplanner_courses_get_all_courses',
            'local_lbplanner_courses_get_course',
            'local_lbplanner_courses_update_course',
            'local_lbplanner_modules_get_all_course_modules',
            'local_lbplanner_modules_get_all_modules',
            'local_lbplanner_modules_get_module',
            'local_lbplanner_plan_add_deadline',
            'local_lbplanner_plan_clear_plan',
            'local_lbplanner_plan_delete_deadline',
            'local_lbplanner_plan_get_plan',
            'local_lbplanner_plan_invite_user',
            'local_lbplanner_plan_get_invites',
            'local_lbplanner_plan_leave_plan',
            'local_lbplanner_plan_remove_user',
            'local_lbplanner_plan_update_deadline',
            'local_lbplanner_plan_update_plan',
            'local_lbplanner_notifications_get_all_notifications',
            'local_lbplanner_notifications_update_notification',
            'local_lbplanner_plan_get_access',
            'local_lbplanner_plan_update_access',
            'local_lbplanner_user_delete_user',
            'local_lbplanner_feedback_submit_feedback',
            'local_lbplanner_feedback_delete_feedback',
            'local_lbplanner_feedback_get_all_feedbacks',
            'local_lbplanner_feedback_get_feedback',
            'local_lbplanner_feedback_update_feedback',
            'local_lbplanner_plan_accept_invite',
            'local_lbplanner_plan_decline_invite',
            'local_lbplanner_config_get_version',
        ),
        'restrictedusers' => 0,
        'enabled' => 1,
        'shortname' => 'lpa'
    ),
);
