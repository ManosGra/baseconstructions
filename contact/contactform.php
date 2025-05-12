<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h5 class="h5 modal-title">Contact us</h5>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column">
                    <form  action="contactform.php"  method="post" enctype="multipart/form-data"  name="EmailForm" class="d-flex flex-column align-items-center">
                        <div class="my-3 w-100 text-start ">
                            <label for="fname" class="p d-block mb-1">YOUR NAME</label>
                            <input required="required" type="text" id="fname" class="w-100" name="name">
                        </div>

                        <div class="my-3 w-100 text-start">
                            <label for="lname" class="p mb-1 d-block">YOUR EMAIL</label>
                            <input required="required" type="email" id="lname" class="w-100" name="mail">
                        </div>

                        <div class="my-3 w-100 text-start">
                            <label for="subject" class="p mb-1 d-block">SUBJECT</label>
                            <textarea required="required" id="subject" name="comment" class="w-100" style="height:100px"></textarea>
                        </div>

                        <div class="privacy-policy-accept d-flex flex-row align-items-center mb-3 w-100 text-start">
                            <input type="checkbox" class="checkbox me-2">By submitting this form, you are agreeing to our <a class="p-0 mx-1" href="/privacy.php">privacy policy.</a>*
                        </div>

                         <div class="d-flex flex-row justify-content-between w-100">
                            <button  class=" btn btn-white me-3" data-dismiss="modal">CLOSE</button>
                            <button type="submit" class=" btn-default ">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>