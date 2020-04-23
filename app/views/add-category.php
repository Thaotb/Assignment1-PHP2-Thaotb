<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm món ăn</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <h2>Create Category</h2>
                <form>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="cate_name" class="form-control">
                    </div>
              
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" name="slug" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Lưu</button>&nbsp;
                </form>
            </div>
        </div>
    </div>
</body>
</html>