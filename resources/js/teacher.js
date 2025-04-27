const coursePopup = document.getElementById('course-popup');
const openCoursePopup = document.getElementById('open-course-popup');
const closeCoursePopup = document.getElementById('close-course-popup');
const formCourse = document.getElementById('form-course');

if(coursePopup && openCoursePopup && closeCoursePopup && formCourse) {
    openCoursePopup.addEventListener('click', () => {
        coursePopup.classList.remove('hidden');
    });
    closeCoursePopup.addEventListener('click', () => {
        coursePopup.classList.add('hidden');
        formCourse.reset();
    });

    document.addEventListener('DOMContentLoaded', function() {
        ClassicEditor
        .create(document.querySelector('#overview'))
        .catch(error => {
            console.error(error);
        });

        ClassicEditor
        .create(document.querySelector('#objectifs'))
        .catch(error => {
            console.error(error);
        });
    });
}