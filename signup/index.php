<?php include("../includes/header.php"); ?>

<div class="wrapper main-content terms">
	<h3>Sign Up for Skyview</h3>
	<div class="signup-form-container">
	  <form id="form1" name="form1" class="signup-form" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="https://tpagold.wufoo.com/forms/z159wtln1fccju4/#public">
	    <ul>
	      <li id="foli1" class="form-row">
	        <label for="Field1">Name</label>
	        <div class="half">
	          <input id="Field1" name="Field1" type="text" class="input-field" value="" maxlength="255" tabindex="1" onkeyup="" required placeholder="Full name" />
	        </div>
	      </li>

	      <li id="foli2" class="form-row">
	        <label class="desc" id="title2" for="Field2">Email</label>
	        <input id="Field2" name="Field2" type="email" spellcheck="false" class="input-field text medium" value="" maxlength="255" tabindex="3" required placeholder="email@address.com"/>
	      </li>

	      <li id="foli3" class="phone form-row">
	        <label class="desc" id="title3" for="Field9">Phone Number</label>
	        <input id="Field3" name="Field3" type="tel" class="input-field text" value="" size="3" maxlength="3" tabindex="4" required placeholder="###" />
	        <span class="symbol">-</span>
	        <input id="Field3-1" name="Field3-1" type="tel" class="input-field text" value="" size="3" maxlength="3" tabindex="5" required placeholder="###" />
	        <span class="symbol">-</span>
	        <input id="Field3-2" name="Field3-2" type="tel" class="input-field text" value="" size="4" maxlength="4" tabindex="6" required placeholder="####" />
	      </li>

	      <li id="foli4" class="form-row">
	        <fieldset>
	          <input id="Field4" name="Field4" type="checkbox" class="checkbox" value="I have read the Terms of Agreement" tabindex="7" />
	          <label class="choice" for="Field4">I have read the <a href="/terms">Terms of Agreement</a></label>
	        </fieldset>
	      </li>

	      <li>
	        <input id="saveForm" name="saveForm" class="btn submit" type="submit" value="Submit" />
	      </li>

	      <li class="hide">
	        <label for="comment">Do Not Fill This Out</label>
	        <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
	        <input type="hidden" id="idstamp" name="idstamp" value="5Hs7BCfydBnWffmYYabn8KyB/gVoEehAmyteJ0bPc0w=" />
	      </li>
	    </ul>
	  </form>
	</div>
</div>

<?php include("../includes/footer.php"); ?>