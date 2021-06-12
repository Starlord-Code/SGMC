<?php

    function test_class_advisor_login_with_valid_credentials()
    {
        $response=class_advisor_login("user1","asdf1234!@#$",$db);
        assertNotIn($response,"invalid");
    }
    function test_course_handling_faculty_login_with_valid_credentials()
    {
        $response=course_handling_faculty_login("user1","asdf1234!@#$",$db);
        assertNotIn($response,"invalid");
    }
    function test_course_mentor_login_with_valid_credentials()
    {
        $response=course_mentor_login("user1","asdf1234!@#$",$db);
        assertNotIn($response,"invalid");
    }
    function test_exam_coordinator_login_with_valid_credentials()
    {
        $response=exam_coordinator_login("user1","asdf1234!@#$",$db);
        assertNotIn($response,"invalid");
    }
    function test_grace_mark_allocator_login_with_valid_credentials()
    {
        $response=grace_mark_allocator_login("user1","asdf1234!@#$",$db);
        assertNotIn($response,"invalid");
    }
        

    function test_class_advisor_home_page_redirection_with_valid_credentials()
    {
        $response=class_advisor_login("user1","asdf1234!@#$",$db);
        assertSee($response,"Home");
    }
    function test_course_handling_faculty_home_page_redirection_with_valid_credentials()
    {
        $response=course_handling_faculty_login("user1","asdf1234!@#$",$db);
        assertSee($response,"Home");
    }
    function test_course_mentor_home_page_redirection_with_valid_credentials()
    {
        $response=course_mentor_login("user1","asdf1234!@#$",$db);
        assertSee($response,"Home");
    }
    function test_exam_coordinator_home_page_redirection_with_valid_credentials()
    {
        $response=exam_coordinator_login("user1","asdf1234!@#$",$db);
        assertSee($response,"Home");
    }
    function test_grace_mark_allocator_home_page_redirection_with_valid_credentials()
    {
        $response=grace_mark_allocator_login("user1","asdf1234!@#$",$db);
        assertSee($response,"Home");
    }
  

    function test_class_advisor_home_page_redirection_with_invalid_credentials()
    {
        $response=class_advisor_login("user1","asf1234!@#$",$db);
        assertNotIn($response,"Home");
    }
    function test_course_handling_faculty_home_page_redirection_with_invalid_credentials()
    {
        $response=course_handling_faculty_login("user1","asf1234!@#$",$db);
        assertNotIn($response,"Home");
    }
    function test_course_mentor_home_page_redirection_with_invalid_credentials()
    {
        $response=course_mentor_login("user1","asf1234!@#$",$db);
        assertNotIn($response,"Home");
    }
    function test_exam_coordinator_home_page_redirection_with_invalid_credentials()
    {
        $response=exam_coordinator_login("user1","asf1234!@#$",$db);
        assertNotIn($response,"Home");
    }
    function test_grace_mark_allocator_home_page_redirection_with_invalid_credentials()
    {
        $response=grace_mark_allocator_login("user1","asf1234!@#$",$db);
        assertNotIn($response,"Home");
    }
    



        //include("functiondefinitions.php");
    function test_class_advisor_home_page()
    {
        $response=class_advisor_login("user1","asdf1234!@#$",$db);
        assertSee($response,"Class Advisor");
    }
    function test_course_handling_faculty_home_page()
    {
        $response=course_handling_faculty_login("user1","asdf1234!@#$",$db);
        assertSee($response,"Course Handling Faculty");
    }
    function test_course_mentor_home_page()
    {
        $response=course_mentor_login("user1","asdf1234!@#$",$db);
        assertSee($response,"Course Mentor");
    }
    function test_exam_coordinator_home_page()
    {
        $response=exam_coordinator_login("user1","asdf1234!@#$",$db);
        assertSee($response,"Exam Coordinator");
    }
    function test_grace_mark_allocator_home_page()
    {
        $response=grace_mark_allocator_login("user1","asdf1234!@#$",$db);
        assertSee($response,"Grace Mark Allocator");
    }


    function test_class_advisor_login_with_wrong_password()
    {
        $response=class_advisor_login("user1","asf1234!@#$",$db);
        assertSee($response,"Invalid");
    }
    function test_course_handling_faculty_login_with_wrong_password()
    {
        $response=course_handling_faculty_login("user1","asf1234!@#$",$db);
        assertSee($response,"Invalid");
    }
    function test_course_mentor_login_with_wrong_password()
    {
        $response=course_mentor_login("user1","asf1234!@#$",$db);
        assertSee($response,"Invalid");
    }
    function test_exam_coordinator_login_with_wrong_password()
    {
        $response=exam_coordinator_login("user1","asf1234!@#$",$db);
        assertSee($response,"Invalid");
    }
    function test_grace_mark_allocator_login_with_wrong_password()
    {
        $response=grace_mark_allocator_login("user1","asf1234!@#$",$db);
        assertSee($response,"Invalid");
    }

   
    function test_class_advisor_login_with_wrong_username()
    {
        $response=class_advisor_login("usr1","asdf1234!@#$",$db);
        assertSee($response,"Invalid");
    }
    function test_course_handling_faculty_login_with_wrong_username()
    {
        $response=course_handling_faculty_login("usr1","asdf1234!@#$",$db);
        assertSee($response,"Invalid");
    }
    function test_course_mentor_login_with_wrong_username()
    {
        $response=course_mentor_login("usr1","asdf1234!@#$",$db);
        assertSee($response,"Invalid");
    }
    function test_exam_coordinator_login_with_wrong_username()
    {
        $response=exam_coordinator_login("usr1","asdf1234!@#$",$db);
        assertSee($response,"Invalid");
    }
    function test_grace_mark_allocator_login_with_wrong_username()
    {
        $response=grace_mark_allocator_login("usr1","asdf1234!@#$",$db);
        assertSee($response,"Invalid");
    }



    function test_class_advisor_login_with_wrong_username_and_password()
    {
        $response=class_advisor_login("usr1","asf1234!@#$",$db);
        assertSee($response,"Invalid");
    }
    function test_course_handling_faculty_login_with_wrong_username_and_password()
    {
        $response=course_handling_faculty_login("user1","asf1234!@#$",$db);
        assertSee($response,"Invalid");
    }
    function test_course_mentor_login_with_wrong_username_and_password()
    {
        $response=course_mentor_login("usr1","asf1234!@#$",$db);
        assertSee($response,"Invalid");
    }
    function test_exam_coordinator_login_with_wrong_username_and_password()
    {
        $response=exam_coordinator_login("usr1","asf1234!@#$",$db);
        assertSee($response,"Invalid");
    }
    function test_grace_mark_allocator_login_with_wrong_username_and_password()
    {
        $response=grace_mark_allocator_login("usr1","asf1234!@#$",$db);
        assertSee($response,"Invalid");
    } 

?>