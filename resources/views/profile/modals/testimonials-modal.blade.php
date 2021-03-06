<hr>
<span>Select number of testimonials</span>
<select class="js-project-testimonial-number">
        <option value="0" selected>0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
<hr>
<span class="js-project-testimonial js-project-testimonial-1 d-none" style="display:flex; flex-direction:column;">
    <input type="file" id="js-project-testimonial-image-1" required>
    <input type="text" id="project-testimonial-customer_name-1" placeholder="Enter user name">
    <input type="text" id="project-testimonial_title-1" placeholder="Review title">
    <input type="text" id="project-testimonial_text-1" placeholder="Enter user review">
</span>
    <br>
<span class="js-project-testimonial js-project-testimonial-2 d-none" style="display:flex; flex-direction:column;">
    <input type="file" id="js-project-testimonial-image-2" required>
    <input type="text" id="project-testimonial-customer_name-2" placeholder="Enter user name">
    <input type="text" id="project-testimonial_title-2" placeholder="Review title">
    <input type="text" id="project-testimonial_text-2" placeholder="Enter user review">
</span>
    <br>
<span class="js-project-testimonial js-project-testimonial-3 d-none" style="display:flex; flex-direction:column;">
    <input type="file" id="js-project-testimonial-image-3" required>
    <input type="text" id="project-testimonial-customer_name-3" placeholder="Enter user name">
    <input type="text" id="project-testimonial_title-3" placeholder="Review title">
    <input type="text" id="project-testimonial_text-3" placeholder="Enter user review">
</span>
    <br>
<span class="js-project-testimonial js-project-testimonial-4 d-none" style="display:flex; flex-direction:column;">
    <input type="file" id="js-project-testimonial-image-4" required>
    <input type="text" id="project-testimonial-customer_name-4" placeholder="Enter user name">
    <input type="text" id="project-testimonial_title-4" placeholder="Review title">
    <input type="text" id="project-testimonial_text-4" placeholder="Enter user review">
</span>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-success js-add-project-testimonial-element-btn js-add-buttons">Add element</button>
</div>
<script>
$(document).ready(function(){
    $('.js-project-testimonial-number').on('change', function(){
        if($(this).val()==1){
            $('.js-project-testimonial').addClass('d-none')
            $('.js-project-testimonial-1').removeClass('d-none')
        }
        if($(this).val()==2){
            $('.js-project-testimonial').addClass('d-none')
            $('.js-project-testimonial-1, .js-project-testimonial-2').removeClass('d-none')
        }
        if($(this).val()==3){
            $('.js-project-testimonial').addClass('d-none')
            $('.js-project-testimonial-1, .js-project-testimonial-2, .js-project-testimonial-3').removeClass('d-none')
        }
        if($(this).val()==4){
            $('.js-project-testimonial').addClass('d-none')
            $('.js-project-testimonial-1, .js-project-testimonial-2, .js-project-testimonial-3, .js-project-testimonial-4').removeClass('d-none')
        }
        if($(this).val()==0){
            $('.js-project-testimonial').addClass('d-none')
        }
    })

    $('.js-add-project-testimonial-element-btn').click(storeProjectTestimonialSection);
})
</script>
