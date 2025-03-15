document.querySelector('.btn-filter').addEventListener('click', function() {
    const collegeId = document.getElementById('college_id').value
    const sort = document.getElementById('sort').value
    const url = window.location.href

    window.location.href =  url.split('?')[0]+'?college_id='+collegeId+'&sorting='+sort
});