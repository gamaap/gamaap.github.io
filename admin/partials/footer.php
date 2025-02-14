</div>
  <script src="/tinymce/tinymce.min.js"></script>
  <script>
    tinymce.init({
      selector: 'textarea#notes',
      menubar: false,
      branding: false,
      statusbar: false,
      plugins: 'advlist autolink lists link image charmap print preview anchor',
      toolbar: 'undo redo | blocks | bold italic underline | \
            alignleft aligncenter alignright alignjustify | \
            bullist numlist outdent indent',
    });

    tinymce.init({
      selector: 'textarea#detail-product',
      menubar: false,
      branding: false,
      statusbar: false,
      plugins: 'advlist autolink lists link image charmap print preview anchor',
      toolbar: 'undo redo | blocks | bold italic underline | \
            alignleft aligncenter alignright alignjustify | \
            bullist numlist outdent indent',
    });

    // dependent select box
    $("#prd-category").on("change", function() {
      const prdCategory = $(this).val();
      const select = $("#prd-type");

      if(prdCategory === 'cables') {  
        select.empty();
        select.append(`
          <option value="" selected disabled>Choose</option>
          <option value="automotive">Automotive</option>
          <option value="electronic">Electronic</option>
        `);
      } else if (prdCategory === 'enamelled-wires') {
        select.empty();
        select.append(`
          <option value="" selected disabled>Choose</option>
          <option>EW</option>
          <option>PVF</option>
          <option>HEIW</option>
          <option>AIW</option>
          <option>UEW</option>
          <option>PEW</option>
          <option>EIW</option>
        `);
      } else if (prdCategory === 'power-supply-cord') {
        if (select.val('plug')) {
          $("#connector-input").css("display", "none");
          $("#plug-input").css("display", "inline");
        } else {
          $("#connector-input").css("display", "inline");
          $("#plug-input").css("display", "none");
        }

        select.empty();
        select.append(`
          <option value="" selected disabled>Choose</option>
          <option value="plug">Plug</option>
          <option value="connector">Connector</option>
        `);
      }
    })
  </script>
  </body>
</html>