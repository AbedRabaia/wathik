<script>
    "use strict";
    var KTCreateAccount = function() {
        var e, t, i, o, a, r, s = [];
        return {
            init: function() {
                (e = document.querySelector("#kt_modal_create_account")) && new bootstrap.Modal(e), (t =
                    document.querySelector("#kt_create_account_stepper")) && (i = t.querySelector(
                    "#kt_create_account_form"), o = t.querySelector(
                    '[data-kt-stepper-action="submit"]'), a = t.querySelector(
                    '[data-kt-stepper-action="next"]'), (r = new KTStepper(t)).on("kt.stepper.changed",
                    (function(e) {
                        4 === r.getCurrentStepIndex() ? (o.classList.remove("d-none"), o.classList
                                .add("d-inline-block"), a.classList.add("d-none")) : 5 === r
                            .getCurrentStepIndex() ? (o.classList.add("d-none"), a.classList.add(
                                "d-none")) : (o.classList.remove("d-inline-block"), o.classList
                                .remove("d-none"), a.classList.remove("d-none"))
                    })), r.on("kt.stepper.next", (function(e) {
                    console.log("stepper.next");
                    var t = s[e.getCurrentStepIndex() - 1];
                    t ? t.validate().then((function(t) {
                        console.log("validated!"), "Valid" == t ? (e.goNext(),
                            KTUtil.scrollTop()) : console.log("notValid!")
                        //     Swal.fire({
                        //     text: "Sorry, looks like there are some errors detected, please try again.",
                        //     icon: "error",
                        //     buttonsStyling: !1,
                        //     confirmButtonText: "Ok, got it!",
                        //     customClass: {
                        //         confirmButton: "btn btn-light"
                        //     }
                        // }).then((function() {
                        //     KTUtil.scrollTop()
                        // }))
                    })) : (e.goNext(), KTUtil.scrollTop())
                })), r.on("kt.stepper.previous", (function(e) {
                    console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop()
                })), s.push(FormValidation.formValidation(i, {
                    fields: {
                        orgnization_name: {
                            validators: {
                                notEmpty: {
                                    message: "???????? ?????????? ?????? ??????????????"
                                }
                            }
                        },
                        orgnization_national_id: {
                            validators: {
                                notEmpty: {
                                    message: "???????? ?????????? ?????????? ????????????"
                                }
                            }
                        },
                        orgnization_ministry: {
                            validators: {
                                notEmpty: {
                                    message: "???????? ?????????? ?????????????? ??????????????"
                                }
                            }
                        },
                        orgnization_founding_date: {
                            validators: {
                                notEmpty: {
                                    message: "???????? ?????????? ?????????? ??????????????"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                })), s.push(FormValidation.formValidation(i, {
                    fields: {
                        email: {
                            validators: {
                                notEmpty: {
                                    message: "???????? ?????????? ???????????? ???????????????????? "
                                }
                            }
                        },
                        phone: {
                            validators: {
                                notEmpty: {
                                    message: "???????? ?????????? ?????? ????????????"
                                }
                            }
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                })), s.push(FormValidation.formValidation(i, {
                    fields: {
                        governorate: {
                            validators: {
                                notEmpty: {
                                    message: "???????? ?????????? ????????????????"
                                }
                            }
                        },
                        provenance: {
                            validators: {
                                notEmpty: {
                                    message: "???????? ?????????? ????????????"
                                }
                            }
                        },
                        district: {
                            validators: {
                                notEmpty: {
                                    message: "???????? ?????????? ????????????"
                                }
                            }
                        },
                        area: {
                            validators: {
                                notEmpty: {
                                    message: "???????? ?????????? ??????????????"
                                }
                            }
                        },
                        neighborhood: {
                            validators: {
                                notEmpty: {
                                    message: "???????? ?????????? ????????"
                                }
                            }
                        },
                        residential_type: {
                            validators: {
                                notEmpty: {
                                    message: "???????? ?????????? ?????? ???????????? ????????????"
                                }
                            }
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                })), s.push(FormValidation.formValidation(i, {
                    fields: {
                        manager_name: {
                            validators: {
                                notEmpty: {
                                    message: "???????? ?????????? ??????????"
                                }
                            }
                        },
                        manager_national_id: {
                            validators: {
                                notEmpty: {
                                    message: "???????? ?????????? ?????????? ????????????"
                                }
                            }
                        },
                        manager_phone: {
                            validators: {
                                notEmpty: {
                                    message: "???????? ?????????? ?????? ????????????"
                                }
                            }
                        },
                        manager_email: {
                            validators: {
                                notEmpty: {
                                    message: "???????? ?????????? ???????????? ????????????????????"
                                }
                            }
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                })), o.addEventListener("click", (function(e) {
                    s[3].validate().then((function(t) {
                        console.log('Hi');
                        "Valid" == t ? $("#kt_create_account_form").submit() :
                            console
                            .log("notValid!");
                    }))
                })))
            }
        }
    }();
    KTUtil.onDOMContentLoaded((function() {
        KTCreateAccount.init()
    }));
</script>
