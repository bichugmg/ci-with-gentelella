<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Apply Job</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/users/careers/css/style_apply.css" />
    <style>
        .upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
    </style>
</head>

<body class="form-v9">

    <div class="page-content">
        <div class="form-v9-content">

            <form class="form-detail" method="post" action="<?php echo base_url() . 'careers/'; ?>do_upload" enctype="multipart/form-data">

                <?php $position = $this->uri->segment(3); ?>

                <h2>APPLY</h2>
                <div>
                    <input type="text" name="full-name" id="full-name" class="input-text" placeholder="Your Name" required>
                </div>
                <div>
                    <input type="email" name="your-email" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                </div>
                
                <div>
                    <input type="text" name="district" id="district" class="input-text" placeholder="District" required>
                </div>

                <div>
                    <input type="text" name="qualification" id="qualification" class="input-text" placeholder="Qualification" required>
                </div>
                <div>
                    <input type="number" name="mobile" id="mobile" class="input-text" placeholder="Mobile" required>
                </div>
                
                <div><label for="resume">&nbsp&nbsp&nbsp&nbspUpload Resume:</label>
                    <input type="file" name="resume" id="resume" placeholder="upload" required>
                    &nbsp&nbsp &nbsp&nbsp <span style="font-size:12px;">file must be in pdf format</span>
                </div>
                <div>
                    <input type="hidden" name="position" value="<?php echo $position; ?>">
                </div>
                <input type="submit" name="register" class="register" value="Apply">
            </form>
        </div>
    </div>

</body>

</html>