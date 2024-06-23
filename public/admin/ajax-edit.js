function Edit(id) {
    $.ajax({
        type: "GET",
        url: "/admin/blog/"+id+"/edit",
        success: function (response) {
            $('.container-class').html(response.html);
        },
        error: function (error) {
        }
    });
}
function Delete(id) {
    $.ajax({
        type: "DELETE",
        url: "/admin/category-blog/" + id,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            console.log(response);
            window.location = "/admin/category-blog/";
        },
        error: function (error) {
        }
    });
}


$('#mediaModal').hide();
function viewMedia(id) {
        $.ajax({
            url: '/admin/media/' + id, // Replace with the correct URL for your route
            type: 'GET',
            success: function (response) {
                if (response.message) {
                    $('#modalZoom').html(response.html);
                    $('.modal-title').html(response.media.name_uz);
                    $('.modal-title1').html(response.media.name_ru);
                } else {
                    // Handle error response
                }
            },
            error: function (xhr, status, error) {
                // Handle AJAX error
            }
        });
    }
    function editModal(id){
    $.ajax({
            url: '/admin/media/' + id + '/edit', // Replace with the correct URL for your route
            type: 'GET',
            success: function (response) {
                if (response.message) {
                    $('#editForm').html(response.html);
                } else {
                }
            },
            error: function (xhr, status, error) {
            }
        });
    }
function DeleteMedia(id) {
    var oyna = confirm('Ochirmoqchimisz?');
    if (oyna) {
        $.ajax({
            type: "DELETE",
            url: "/admin/media/" + id,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                if (response.success) {
                    window.location = "/admin/media";
                }
                else{
                    window.location = "/admin/media";
                }
            },
            error: function (error) {
            }
        });
    }
}



//MediaCategory
function editCategoryMedia(id){
    $.ajax({
        url: '/admin/category-media/'+id+'/edit',
        type: 'GET',
        success: function (response) {
            if (response.message) {
                $('#EditCategoryForm').html(response.html);
            } else {
            }
        },
        error: function (xhr, status, error) {
        }
    });
}
function editTreatment(id){
    $.ajax({
        url: '/admin/treatment/'+id+'/edit',
        type: 'GET',
        success: function (response) {
            if (response.message) {
                $('#editTreatment').html(response.html);
            }
            else {
            }
        },
        error: function (xhr, status, error) {
        }
    });
}
function editInformation(id){
    $.ajax({
        url: '/admin/information/'+id+'/edit',
        type: 'GET',
        success: function (response) {
            if (response.message) {
                $('#editInformation').html(response.html);
            }
            else {
            }
        },
        error: function (xhr, status, error) {
        }
    });
}
function editMenu(id){
    $.ajax({
        url: '/admin/menu/'+id+'/edit',
        type: 'GET',

        success: function (response) {
            if (response.message) {
                $('#editForm').html(response.html);
            }
            else {
            }
        },
        error: function (xhr, status, error) {
        }
    });
}

function deleteMenu(id){
    let src = confirm('Menyuni o`chirmoqchimisz?');
    if(src) {
        $.ajax({
            url: '/admin/menu/' + id,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                if (response.message) {
                    window.location= "/admin/menu";
                } else {
                }
            },
            error: function (xhr, status, error) {
            }
        });
    }
    else{

    }
}

function editHome(id){
    $.ajax({
        url: '/admin/home/'+id+'/edit',
        type: 'GET',
        success: function (response) {
            if (response.message) {
                $('#editHome').html(response.html);
            }
            else {
            }
        },
        error: function (xhr, status, error) {
        }
    });
}
function showHome(id){
    $.ajax({
        url: '/admin/home/'+id,
        type: 'GET',
        success: function (response) {
            if (response.message) {
                $('#showHome').html(response.html);
            }
            else {
            }
        },
        error: function (xhr, status, error) {
        }
    });
}
function modalHeader(id){
    $.ajax({
        url: '/admin/header/'+id+'/edit',
        type: 'GET',
        success: function (response) {
            if (response.message) {
                $('#modalHeader').html(response.html);
            }
            else {
            }
        },
        error: function (xhr, status, error) {
        }
    });
}

function modalContact(id){
    $.ajax({
        url: '/admin/contact/'+id+'/edit',
        type: 'GET',
        success: function (response) {
            if (response.message) {
                $('#modalContact').html(response.html);
            }
            else {
            }
        },
        error: function (xhr, status, error) {
        }
    });
}
//modalContact

//form edit
function EditForm(id){
    $.ajax({
        url: '/appointment/form/'+id+'/edit',
        type: 'GET',
        success: function (response) {
            if (response.message) {
                $('#showForm').html(response.html);
            }
            else {
            }
        },
        error: function (xhr, status, error) {
        }
    });
}
//EditBlog
//admin/blog-category/{blog_category}/edit
function EditBlog(id){
    $.ajax({
        url: '/admin/category-blog/'+id+'/edit',
        type: 'GET',
        success: function (response) {
            if (response.message) {
                $('#editBlog').html(response.html);
            }
            else {
            }
        },
        error: function (xhr, status, error) {
        }
    });
}
