<div class="row">
    <div class="col">
        <h4 class="mt-4">Create <span class="app-brand-text menu-text fw-bold" style="color: #666cff">PROWESS</span>
            Account for Industry</h4>
        <div class="card mb-3">
            <div class="tab-content">
                <h5 class="mt-4">Industry Information</h5>
                <!-- Personal Info -->
                <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                    <form id="form1">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end"
                                        for="formtabs-first-name">Industy/Company
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="formtabs-first-name" class="form-control"
                                            placeholder="John" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">Contact
                                        Person</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="formtabs-first-name" class="form-control"
                                            placeholder="John" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Type of
                                        Industry</label>
                                    <div class="col-sm-9">
                                        <select id="formtabs-country" class="select2 form-select"
                                            data-allow-clear="true">
                                            <option value="">Select</option>
                                            <option value="Agriculture and Farming">Agriculture and Farming</option>
                                            <option value="Apparel and Fashion">Apparel and Fashion</option>
                                            <option value="Automotive">Automotive</option>
                                            <option value="Banking and Financial Services">Banking and Financial
                                                Services</option>
                                            <option value="Biotechnology">Biotechnology</option>
                                            <option value="Chemicals">Chemicals</option>
                                            <option value="Construction">Construction</option>
                                            <option value="Consulting">Consulting</option>
                                            <option value="Consumer Electronics">Consumer Electronics</option>
                                            <option value="Education and Training">Education and Training</option>
                                            <option value="Energy and Utilities">Energy and Utilities</option>
                                            <option value="Entertainment and Media">Entertainment and Media</option>
                                            <option value="Food and Beverage">Food and Beverage</option>
                                            <option value="Healthcare and Pharmaceuticals">Healthcare and
                                                Pharmaceuticals</option>
                                            <option value="Hospitality and Tourism">Hospitality and Tourism</option>
                                            <option value="Information Technology">Information Technology</option>
                                            <option value="Insurance">Insurance</option>
                                            <option value="Internet and E-commerce">Internet and E-commerce</option>
                                            <option value="Manufacturing">Manufacturing</option>
                                            <option value="Mining and Metals">Mining and Metals</option>
                                            <option value="Non-profit and Social Services">Non-profit and Social
                                                Services</option>
                                            <option value="Professional Services">Professional Services</option>
                                            <option value="Real Estate">Real Estate</option>
                                            <option value="Retail">Retail</option>
                                            <option value="Telecommunications">Telecommunications</option>
                                            <option value="Transportation and Logistics">Transportation and Logistics
                                            </option>
                                            <option value="Travel and Leisure">Travel and Leisure</option>
                                            <option value="Wholesale and Distribution">Wholesale and Distribution
                                            </option>
                                            <option value="Other">Other</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
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
                            </div> --}}
                            <div class="row g-3">
                                <h5 class="mt-4">Address</h5>
                                <div class="col-md-6">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end"
                                            for="formtabs-username">Building Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="formtabs-username" class="form-control"
                                                placeholder="Building" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end"
                                            for="formtabs-username">Street</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="formtabs-username" class="form-control"
                                                placeholder="Street" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end"
                                            for="formtabs-username">Purok</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="formtabs-username" class="form-control"
                                                placeholder="Purok" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end"
                                            for="formtabs-username">Barangay</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="formtabs-username" class="form-control"
                                                placeholder="To change to select" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end"
                                            for="formtabs-municipality">Municipality</label>
                                        <div class="col-sm-9">
                                            <select id="formtabs-municipality" class="select2 form-select"
                                                data-allow-clear="true">
                                                <option value="">Select</option>
                                                <option value="City of Digos">City of Digos</option>
                                                <option value="Sta. Cruz">Sta. Cruz</option>
                                                <option value="Bansalan">Bansalan</option>
                                                <option value="Matanao">Matanao</option>
                                                <option value="Magsaysay">Magsaysay</option>
                                                <option value="Hagonoy">Hagonoy</option>
                                                <option value="Kiblawan">Kiblawan</option>
                                                <option value="Padada">Padada</option>
                                                <option value="Sulop">Sulop</option>
                                                <option value="Malalag">Malalag</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end"
                                            for="formtabs-username">Province</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="formtabs-username" class="form-control"
                                                placeholder="To change to select" value="Davao del Sur" readonly/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label text-sm-end"
                                            for="formtabs-username">Zip Code</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="formtabs-username" class="form-control"
                                                placeholder="8002"/>
                                        </div>
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
                                                <span class="input-group-text" id="formtabs-email2">@gmail.com</span>
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
