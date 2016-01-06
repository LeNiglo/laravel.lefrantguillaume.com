$(document).ready(function () {

    $('.select2').select2();

    // Manage Study
    $('.delete-study').click(function (e) {
        e.preventDefault();
        e.stopPropagation();

        var $this = $(this);
        var $form = $('#form-study');

        $.ajax({
            url: '/admin/forms/manage-study',
            method: 'POST',
            dataType: 'json',
            data: {
                delete: true,
                _token: $form.find('input[name="_token"]').val(),
                id: $this.data('id')
            }
        }).done(function (res) {
            if (res.res) {
                $this.closest('tr').remove();
            }
        });

    });

    $('.update-study').click(function (e) {
        e.preventDefault();
        e.stopPropagation();

        var $this = $(this);
        var $tr = $this.closest('tr');
        var $form = $('#form-study');

        $form.find('input[name="id"]').val($this.data('id'));

        $form.find('input[name="year"]').val($tr.find('td.study-year').text());
        $form.find('input[name="school"]').val($tr.find('td.study-school').text());
        $form.find('input[name="title"]').val($tr.find('td.study-title').text());
    });

    // Manage Skill
    $('.delete-skill').click(function (e) {
        e.preventDefault();
        e.stopPropagation();

        var $this = $(this);
        var $form = $('#form-skill');

        $.ajax({
            url: '/admin/forms/manage-skill',
            method: 'POST',
            dataType: 'json',
            data: {
                delete: true,
                _token: $form.find('input[name="_token"]').val(),
                id: $this.data('id')
            }
        }).done(function (res) {
            if (res.res) {
                $this.closest('tr').remove();
            }
        });

    });

    $('.update-skill').click(function (e) {
        e.preventDefault();
        e.stopPropagation();

        var $this = $(this);
        var $tr = $this.closest('tr');
        var $form = $('#form-skill');

        $form.find('input[name="id"]').val($this.data('id'));

        $form.find('input[name="name"]').val($tr.find('td.skill-name').text());
        $form.find('input[name="progress"]').val(parseInt($tr.find('td.skill-progress').text()));
    });

    // Manage Experience
    $('.delete-experience').click(function (e) {
        e.preventDefault();
        e.stopPropagation();

        var $this = $(this);
        var $form = $('#form-experience');

        $.ajax({
            url: '/admin/forms/manage-experience',
            method: 'POST',
            dataType: 'json',
            data: {
                delete: true,
                _token: $form.find('input[name="_token"]').val(),
                id: $this.data('id')
            }
        }).done(function (res) {
            if (res.res) {
                $this.closest('tr').remove();
            }
        });

    });

    $('.update-experience').click(function (e) {
        e.preventDefault();
        e.stopPropagation();

        var $this = $(this);
        var $tr = $this.closest('tr');
        var $form = $('#form-experience');

        $form.find('input[name="id"]').val($this.data('id'));

        $form.find('input[name="company"]').val($tr.find('td.company').text());
        $form.find('input[name="subject"]').val($tr.find('td.subject').text());
        $form.find('input[name="begin_date"]').val($tr.find('td').last().data('begin-date'));
        $form.find('input[name="end_date"]').val($tr.find('td').last().data('end-date'));
        $form.find('textarea[name="commentary"]').val($tr.find('td').last().data('commentary'));

        var skillIds = [];
        $tr.find('td.skills').find('span').each(function () {
            skillIds.push($(this).data('id'));
        });
        $form.find('select.select2[name="skills[]"]').val(skillIds).select2();

        var rating = $tr.find('td.rating').text();
        $form.find('input[name="rating"]').each(function () {
            if ($(this).val() === rating) {
                $(this).prop('checked', 'checked');
                return false;
            }
        });
    });


});
