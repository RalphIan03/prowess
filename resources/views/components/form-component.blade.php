<div class="row">
    <div class="col">
        <h4 class="mt-4">Create <span class="app-brand-text menu-text fw-bold" style="color: #666cff">PROWESS</span> Account</h4>
        <div class="card mb-3">
            <div class="tab-content">
                <h5 class="mt-4">Personal Information</h5>
                <!-- Personal Info -->
                <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                    <form id="form1">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">Last
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="formtabs-first-name" class="form-control"
                                            placeholder="John" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">First
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="formtabs-first-name" class="form-control"
                                            placeholder="John" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Middle
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="formtabs-last-name" class="form-control"
                                            placeholder="Doe" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end"
                                        for="formtabs-country">Suffix</label>
                                    <div class="col-sm-9">
                                        <select id="formtabs-country" class="select2 form-select"
                                            data-allow-clear="true">
                                            <option value="">Select</option>
                                            <option value="Jr">Jr.</option>
                                            <option value="Sr">Sr.</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-language">Gender
                                        *</label>
                                    <div class="col-sm-9">
                                        <select id="formtabs-country" class="select2 form-select"
                                            data-allow-clear="true" required>
                                            <option value="">Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-birthdate">Birth
                                        Date</label>
                                    <div class="col-sm-9">
                                        <input type="date" id="formtabs-birthdate" class="form-control dob-picker"
                                            placeholder="YYYY-MM-DD" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-phone">Birth
                                        Place</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="formtabs-phone" class="form-control phone-mask"
                                            placeholder="City/Municipality" aria-label="658 799 8941" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-phone">Contact
                                        Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="formtabs-phone" class="form-control phone-mask"
                                            placeholder="09123456789" aria-label="09123456789" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-language">School
                                        *</label>
                                    <div class="col-sm-9">
                                        <select id="formtabs-country" class="select2 form-select"
                                            data-allow-clear="true" required>
                                            <option value="">Select</option>
                                            <option value="UM Digos">UM Digos</option>
                                            <option value="CorJesu College">CorJesu College</option>
                                            <option value="DSSC">DSSC</option>
                                            <option value="SC">SC</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <h5 class="mt-4">Login Information</h5>
                                <div class="col-md-6">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end"
                                            for="formtabs-username">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="formtabs-username" class="form-control"
                                                placeholder="john.doe" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end"
                                            for="formtabs-email">Email</label>
                                        <div class="col-sm-9">
                                            <div class="input-group input-group-merge">
                                                <input type="text" id="formtabs-email" class="form-control"
                                                    placeholder="john.doe" aria-label="john.doe"
                                                    aria-describedby="formtabs-email2" />
                                                <span class="input-group-text"
                                                    id="formtabs-email2">@gmail.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row form-password-toggle">
                                        <label class="col-sm-3 col-form-label text-sm-end"
                                            for="formtabs-password">Password</label>
                                        <div class="col-sm-9">
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="formtabs-password" class="form-control"
                                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                    aria-describedby="formtabs-password2" />
                                                <span class="input-group-text cursor-pointer"
                                                    id="formtabs-password2"><i
                                                        class="mdi mdi-eye-off-outline"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row form-password-toggle">
                                        <label class="col-sm-3 col-form-label text-sm-end"
                                            for="formtabs-confirm-password">Confirm</label>
                                        <div class="col-sm-9">
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="formtabs-confirm-password"
                                                    class="form-control"
                                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                    aria-describedby="formtabs-confirm-password2" />
                                                <span class="input-group-text cursor-pointer"
                                                    id="formtabs-confirm-password2"><i
                                                        class="mdi mdi-eye-off-outline"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-3">
                            <div class="col-md-1">
                                <div class="row justify-content-end">
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                        {{-- <button type="reset" class="btn btn-label-secondary">Cancel</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Account setup -->
                <!-- Social Links -->
            </div>
        </div>
    </div>
</div>
