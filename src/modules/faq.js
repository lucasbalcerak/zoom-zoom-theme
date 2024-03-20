import $ from 'jquery';

class FaqToggle {
    constructor(){
        this.faqQuestions = $(".js-open-close-trigger");
        this.events();
    }

    events() {
        this.faqQuestions.on('click', this.toggleContent)
    }

    toggleContent(){
        $(this).next('.faq-content').slideToggle();

        const icon = $(this).find('i');
        
        if(icon.hasClass('fa-solid fa-chevron-right')) {
            icon.removeClass('fa-solid fa-chevron-right').addClass('fa-solid fa-chevron-down');
        } else if (icon.hasClass('fa-solid fa-chevron-down')) {
            icon.removeClass('fa-solid fa-chevron-down').addClass('fa-solid fa-chevron-right');
        }
    }
}

export default FaqToggle