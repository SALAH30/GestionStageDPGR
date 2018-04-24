function formValidation() {
    "use strict";
    /*----------- BEGIN validationEngine CODE -------------------------*/
    $('.popup-validation').validationEngine();
    /*----------- END validationEngine CODE -------------------------*/

    /*----------- BEGIN validate CODE -------------------------*/
$.validator.addMethod(
    "regex",
    function(value, element, param) {
        return this.optional(element) ||
            value.match(typeof param == 'string' ? new RegExp(param) : param);
    },
    "SVP remplir correctement le champ."
);

var isAfterDate = function(value) {
             var inDate = value.replace(/^(\d{2})\/(\d{2})\/(\d{4})$/, '$2/$1/$3'),date = new Date();
            if((Date.parse(inDate) < (Date.parse(date) - 536457600000)) && (Date.parse(inDate) > (Date.parse(date) - 2840140800000))) {
                return true;
            }
        };
jQuery.validator.addMethod("newDate", function(value, element) {
        return isAfterDate(value);
    }, "La date de naissance n'est pas correcte.");
var today = function(value) {
             var inDate = value.replace(/^(\d{2})\/(\d{2})\/(\d{4})$/, '$2/$1/$3'),date = new Date();
            if(Date.parse(inDate) < Date.parse(date)) {
                return true;
            }
        };
jQuery.validator.addMethod("now", function(value, element) {
        return today(value);
    }, "La date ne peut pas dépasser la date d'aujourd'hui.");


    $('.block-validate').validate({
        rules: {
            required1: {
                required: true,
                regex: "^[a-zA-Zâäàéèùêëîïôöçñ ][a-zA-Z-_\.\' âäàéèùêëîïôöçñ]{1,45}$"
            },
            required11: {
                required: true,
                regex: "^[a-zA-Zâäàéèùêëîïôöçñ ][a-zA-Z-_\.\' âäàéèùêëîïôöçñ]{1,45}$"
            },
            required21: {
                required: true,
                regex: "^[a-zA-Zâäàéèùêëîïôöçñ ][a-zA-Z-_\.\' âäàéèùêëîïôöçñ]{1,45}$"
            },
            dp1: {
                now:true
            },
            dp2: {
                now:true
            },
            dp3: {
                now:true
            },
            dp4: {
                now:true
            },
            /* req: {
                required: true
            },
             req1: {
                required: true
            },*/
             req2: {
                required: true
            },
            required: {
                required: true
            },
            requis3: {
                required: true
            },
            requis4: {
                required: true
            },
            require2: {
                required: true
            },
            required4: {
              //  required: true,
                regex: "^[آءأ-ي ][آءأ-ي -_\. ]{1,45}$"
            },
            required10: {
               // required: true,
                regex: "^[آءأ-ي0-9 ][آءأ-ي -_\.0-9 ]{1,45}$"
            },
             required9:{
                regex: /^([\+][0-9]{1,3}[ \.\-])?([\(]{1}[0-9]{2,6}[\)])?([0-9 \.\-\/]{3,20})((x|ext|extension)[ ]?[0-9]{1,4})?$/
            },
            require9:{
                regex: /^([\+][0-9]{1,3}[ \.\-])?([\(]{1}[0-9]{2,6}[\)])?([0-9 \.\-\/]{3,20})((x|ext|extension)[ ]?[0-9]{1,4})?$/
            },
            required5: {
              //  required: true,
                regex: "^[آءأ-ي ][آءأ-ي -_\. ]{1,45}$"
            },
            required7: {
                //required: true,
                regex: "^[آءأ-ي ][آءأ-ي -_\. ]{1,45}$"
            },
            required2: {
                required: true,
                regex: "^[a-zA-Zâäàéèùêëîïôöçñ ][a-zA-Z-_\. âäàéèùêëîïôöçñ]{1,45}$"
            },
            nom_dir: {
                required: true,
                regex: "^[a-zA-Zâäàéèùêëîïôöçñ ][a-zA-Z-_\. âäàéèùêëîïôöçñ]{1,45}$"
            },
             prenom_dir: {
                required: true,
                regex: "^[a-zA-Zâäàéèùêëîïôöçñ ][a-zA-Z-_\. âäàéèùêëîïôöçñ]{1,45}$"
            },
            required6: {
                //required: true,
                regex: "^[a-zA-Zâäàéèùêëîïôöçñ ][a-zA-Z-_\. âäàéèùêëîïôöçñ]{1,45}$"
            },
            email2: {
                //required: true,
                email: true
            },
            date2: {
                required: true,
                regex: /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/
            },
            url2: {
                url: true
            },
            password2: {
                required: true,
                minlength: 5
            },
            confirm_password2: {
                required: true,
                minlength: 5,
                equalTo: "#password2"
            },
            required8:{
                required: true,
                newDate:true,
                regex: /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/
            },
            agree2: "required",
            digits: {
                required: true,
                digits: true
            },
            Laboratoire_Code: {
                required: true,
                digits: true
            },
            digit: {
                required: true,
                digits: true
            },
            /* number_stg: {
                required: true,
                digits: true
            },*/
            number2 : {
                required: true,
                digits: true
            },
            Dure :{
                required: true,
                digits: true
            },
             digits0: {
                //required: true,
                regex: /^[\+]?((([0-9]{1,3})([,][0-9]{3})*)|([0-9]+))?([\.]([0-9]+))?$/
            },
             digits4: {
                required: true,
                regex: /^[\+]?((([0-9]{1,3})([,][0-9]{3})*)|([0-9]+))?([\.]([0-9]+))?$/
            },
             digits1: {
                //required: true,
                regex: /^[\+]?((([0-9]{1,3})([,][0-9]{3})*)|([0-9]+))?([\.]([0-9]+))?$/
            },
             digits2: {
                //required: true,
                regex: /^[\+]?((([0-9]{1,3})([,][0-9]{3})*)|([0-9]+))?([\.]([0-9]+))?$/
            },
            digits3: {
                //required: true,
                regex: /^[\+]?((([0-9]{1,3})([,][0-9]{3})*)|([0-9]+))?([\.]([0-9]+))?$/
            },
            range: {
                required: true,
                range: [5, 16]
            },
                number3: {
                required: true,
                digits: true
            },
            req3: {
                required: true,
                regex: "^[a-zA-Zâäàéèùêëîïôöçñ ][a-zA-Z-_\. âäàéèùêëîïôöçñ]{1,45}$"
            },
            req4: {
                required: true,
                regex: "^[a-zA-Zâäàéèùêëîïôöçñ ][a-zA-Z-_\. âäàéèùêëîïôöçñ]{1,45}$"
            },
            /*req5: {
                required: true
            },
            req6: {
                required: true,
                regex: "^[a-zA-Zâäàéèùêëîïôöçñ ][a-zA-Z-_\. âäàéèùêëîïôöçñ]{1,45}$"
            },
            req7: {
                required: true,
                regex: "^[a-zA-Zâäàéèùêëîïôöçñ ][a-zA-Z-_\. âäàéèùêëîïôöçñ]{1,45}$"
            },
            req8: {
                required: true,
            },
            req9: {
                required: true,
            },*/
            req10: {
                //required: true,
                regex: "^[a-zA-Zâäàéèùêëîïôöçñ ][a-zA-Z-_\. âäàéèùêëîïôöçñ]{1,45}$"
            },
            req11: {
                //required: true,
                regex: "^[a-zA-Zâäàéèùêëîïôöçñ ][a-zA-Z-_\. âäàéèùêëîïôöçñ]{1,45}$"
            },
            /*req12: {
                //required: true,
            },
            req13: {
                //required: true,
            },
            req14: {
                //required: true,
            },
            req15: {
                //required: true,
            },
            req16: {
                //required: true,
            },
            req17: {
                required: true,
            },
            req18: {
                required: true
            },*/
            email4: {
                //required: true,
                email: true
            },
            url: {
                //required: true,
                url: true
            },
            requi5:{
                //required: true,
                regex: /^([\+][0-9]{1,3}[ \.\-])?([\(]{1}[0-9]{2,6}[\)])?([0-9 \.\-\/]{3,20})((x|ext|extension)[ ]?[0-9]{1,4})?$/
            },
            
            requi3: {
               // required: true,
                regex: "^[a-zA-Zâäàéèùêëîïôöçñ ][a-zA-Z-_\. âäàéèùêëîïôöçñ]{1,45}$"
            }
        },
        errorClass: 'help-block',
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        }
    });
    /*----------- END validate CODE -------------------------*/
}