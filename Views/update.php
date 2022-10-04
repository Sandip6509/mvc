<div class="album py-5 bg-light">
    <div class="row justify-content-center align-items-center">
        <div class="card border-success" style="max-width: 65rem;padding: 2%;">
            <h2> Update user </h2> <hr>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" 
                            value="<?php echo $user_data->fname; ?>" placeholder="Meet" required="">
                        </div>
                        <div class="col">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" 
                            value="<?php echo $user_data->lname; ?>" placeholder="Shah" required="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" 
                            value="<?php echo $user_data->email; ?>" placeholder="name@example.com" required="">
                        </div>
                        <div class="col">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" 
                            value="<?php echo $user_data->pass; ?>" placeholder="password" required="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="mobile" class="form-label">Contact Number</label>
                            <input type="tel" class="form-control" id="mobile" name="mobile" 
                            value="<?php echo $user_data->contact; ?>" placeholder="1234567890" required="">
                        </div>
                        <div class="col">
                            <label for="gender" class="form-label">Gender</label><br>
                            <input type="radio" id="gender" name="gender" value="Male"
                            <?php if($user_data->gender == 'Male'){ echo 'checked'; } ?> >Male
                            <input type="radio" id="gender" name="gender" value="Female" 
                            <?php if($user_data->gender == 'Female'){ echo 'checked'; } ?> >Female
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" rows="3" name="address" placeholder="address" required=""><?php echo $user_data->address; ?></textarea>
                        </div>
                        <div class="col">
                            <label for="inputState" class="form-label">State</label>
                            <select class="form-select" id="inputState" name="state" aria-label="Default select example" required="">
                                <option disabled>Select</option>
                                <option value="gj" 
                                <?php if($user_data->state == 'gj'){   echo 'selected'; } ?>
                                >Gujarat</option>
                                <option value="dl"
                                <?php if($user_data->state == 'dl'){   echo 'selected'; } ?>
                                >Delhi</option>
                                <option value="rj"
                                <?php if($user_data->state == 'rj'){   echo 'selected'; } ?>
                                >Rajasthan</option>
                                <option value="mh"
                                <?php if($user_data->state == 'mh'){   echo 'selected'; } ?>
                                >Maharashtra</option>
                                <option value="sk"
                                <?php if($user_data->state == 'sk'){   echo 'selected'; } ?>
                                >Sikkim</option>
                                <option value="pb"
                                <?php if($user_data->state == 'pb'){   echo 'selected'; } ?>
                                >Punjab</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="profile" class="form-label">Profile</label><br>
                            <img src="uploads/<?php echo $user_data->profile; ?>" height="80px" width="80px">
                            <input type="file" value="uploads/<?php echo $user_data->profile; ?>" src="uploads/<?php echo $user_data->profile; ?>" class="form-control-file" name="profile" id="profile">
                        </div>
                        <div class="col">
                            <label for="hobbies" class="form-label">Hobbies</label><br>
                            <?php $hobbies_arr = explode(',', $user_data->hobbies); ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="hobbies[]" value="Travelling"
                                <?php if(in_array('Travelling', $hobbies_arr)){   echo 'checked'; } ?>>
                                <label class="form-check-label" for="inlineCheckbox1">Travelling</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="hobbies[]" value="Music"
                                <?php if(in_array('Music', $hobbies_arr)){   echo 'checked'; } ?>>
                                <label class="form-check-label" for="inlineCheckbox2">Music</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="hobbies[]" value="Coding"
                                <?php if(in_array('Coding', $hobbies_arr)){   echo 'checked'; } ?>>
                                <label class="form-check-label" for="inlineCheckbox3">Coding</label>
                            </div>
                        </div>

                    </div><br>
                    <div class="mb-3">
                        <input type="submit" name="update" id="update" value="Update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>