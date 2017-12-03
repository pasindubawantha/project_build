<div class="row">
	<div class="col-xs-6">
	<div class="box box-primary">
	    <div class="box-header with-border">
	      <h3 class="box-title">Upload CVS File</h3>
	    </div>
	    <!-- /.box-header -->
	    <!-- form start -->
	    <form role="form" action="<?= base_url(); ?>/Project/budget_chnage/<?= $project_id; ?>">
	      <div class="box-body">
	        <div class="form-group">
	          <label for="exampleInputFile">File input</label>
	          <input id="exampleInputFile" type="file">

	          <p class="help-block">Upload your cvs file here.</p>
	        </div>
	        </div>

	      <!-- /.box-body -->

	      <div class="box-footer">
	        <button type="submit" class="btn btn-primary">Submit</button>
	        <button type="button" class="btn pull-right btn-success">Download CVS template</button>
	      </div>
	    </form>
	  </div>
	</div>
	<div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>Delete</h3>

          <p>Delete current budget</p>
        </div>
        <div class="icon">
          <i class="fa fa-trash"></i>
        </div>
        <a href="#" class="small-box-footer">
          Delete <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
</div>