<div>

    <div class="profile-tab height-100-p">
        <div class="tab height-100-p">
            <ul class="nav nav-tabs customtab" role="tablist">
                <li class="nav-item">
                    <a wire:click.prevent='selectTab("personal_details")'
                        class="nav-link {{ $tab == 'personal_details' ? 'active' : '' }}" data-toggle="tab"
                        href="#personal_details" role="tab">Personal details</a>
                </li>
                <li class="nav-item">
                    <a wire:click.prevent='selectTab("change_password")'
                        class="nav-link {{ $tab == 'change_password' ? 'active' : '' }}" data-toggle="tab"
                        href="#change_password" role="tab">Change password</a>
                </li>
            </ul>
            <div class="tab-content">
                <!-- Personal_detail Tab start -->
                <div class="tab-pane fade {{ $tab == 'personal_details' ? 'active show' : '' }}" id="personal_details"
                    role="tabpanel">
                    <div class="pd-20">
                        <form wire:submit.prevent='updateAdminPersonalDetails()'>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" wire:model='name'
                                            placeholder="Enter Full Name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" wire:model='email'
                                            placeholder="Enter Email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">User Name</label>
                                        <input type="text" class="form-control" wire:model='username'
                                            placeholder="Enter UserName">
                                        @error('username')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Change</button>
                        </form>
                    </div>
                </div>
                <!-- Personal_details Tab End -->
                <!-- Change+password Tab start -->
                <div class="tab-pane fade {{ $tab == 'change_password' ? 'active show' : '' }}" id="change_password"
                    role="tabpanel">
                    <div class="pd-20 profile-task-wrap">
                        ---change password---
                    </div>
                </div>
                <!-- Change_password Tab End -->

            </div>
        </div>
    </div>

</div>
