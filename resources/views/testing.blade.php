<x-master>
    <x-cards.basic-card title="Validation">
        <form class="form" id="kt_form_1">
            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12">Email *</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <input type="text" class="form-control" name="email" placeholder="Enter your email"/>
                    <span class="form-text text-muted">We\ll never share your email with anyone else.</span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12">URL *</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="flaticon2-website"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="url" placeholder="Enter your url"/>
                    </div>
                    <span class="form-text text-muted">Please enter your website URL.</span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12">Digits</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="flaticon2-browser"></i></span>
                        </div>
                        <input type="text" class="form-control" name="digits" placeholder="Enter digits"/>
                    </div>
                    <span class="form-text text-muted">Please enter only digits</span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12">Credit Card</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" ><i class="flaticon-price-tag"></i></span>
                        </div>
                        <input type="text" class="form-control" name="creditcard" placeholder="Enter card number"/>
                    </div>
                    <span class="form-text text-muted">Please enter your credit card number</span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12">US Phone</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" ><i class="flaticon2-phone"></i></span>
                        </div>
                        <input type="text" class="form-control" name="phone" placeholder="Enter phone"/>
                    </div>
                    <span class="form-text text-muted">Please enter your US phone number</span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12">Option *</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <select class="form-control" name="option">
                        <option value="">Select</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <span class="form-text text-muted">Please select an option.</span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12">Options *</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <select class="form-control" name="options" multiple size="7">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                        <option>Option 5</option>
                        <option>Option 6</option>
                        <option>Option 7</option>
                    </select>
                    <span class="form-text text-muted">Please select at least 2 or maximum 5 options</span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12">Memo *</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <textarea class="form-control" name="memo" placeholder="Enter a menu" rows="3"></textarea>
                    <span class="form-text text-muted">Please enter a menu within text length range 50 and 100.</span>
                </div>
            </div>

            <div class="separator separator-dashed my-10"></div>

            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12">Checkbox *</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="form-check checkbox-inline">
                        <label class="checkbox checkbox-outline">
                            Tick me
                            <input type="checkbox" name="checkbox"/>
                            <span></span>
                        </label>
                    </div>
                    <span class="form-text text-muted">Please tick the checkbox</span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12">Checkboxes *</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="form-check checkbox-list">
                        <label class="checkbox checkbox-outline">
                            <input type="checkbox" name="checkboxes"/> Option 1
                            <span></span>
                        </label>
                        <label class="checkbox checkbox-outline">
                            <input type="checkbox" name="checkboxes"/> Option 2
                            <span></span>
                        </label>
                        <label class="checkbox checkbox-outline">
                            <input type="checkbox" name="checkboxes"/> Option 3
                            <span></span>
                        </label>
                    </div>
                    <span class="form-text text-muted">Please select at lease 1 and maximum 2 options</span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label text-right col-lg-3 col-sm-12">Radios *</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="form-check radio-inline">
                        <label class="radio radio-outline">
                            <input type="checkbox" name="radios"/> Option 1
                            <span></span>
                        </label>
                        <label class="radio radio-outline">
                            <input type="checkbox" name="radios"/> Option 2
                            <span></span>
                        </label>
                        <label class="radio radio-outline">
                            <input type="radio" name="radios"/> Option 3
                            <span></span>
                        </label>
                    </div>
                    <span class="form-text text-muted">Please select an option</span>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-9 ml-lg-auto">
                    <button type="submit" class="btn btn-primary font-weight-bold mr-2">Validate</button>
                    <button type="reset" class="btn btn-light-primary font-weight-bold">Cancel</button>
                </div>
            </div>
        </form>
    </x-cards.basic-card>
</x-master>

