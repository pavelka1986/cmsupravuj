$(document).ready(function () {

    // ------------- menu ---------------
    $('#nav li').hover(
        function () {
            //show its submenu
            $('ul', this).slideDown(100);
        },
        function () {
            //hide its submenu
            $('ul', this).slideUp(100);
        }
    );


    // ------------- fancybox ---------------
    $("a[rel=example_group]").fancybox({
        'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

      // ------------- editor ---------------


      $('#frmmenuForm-obsah,#frmstrankyForm-text_aktualita').wysiwyg(

      {
    controls: {
      undo : { visible : true },
      redo : { visible : true },

      strikeThrough : { visible : true },
      underline     : { visible : true },

      justifyLeft   : { visible : true },
      justifyCenter : { visible : true },
      justifyRight  : { visible : true },
      justifyFull   : { visible : true },

      indent  : { visible : false },
      outdent : { visible : false },

      subscript   : { visible : true },
      superscript : { visible : true },

      insertOrderedList    : { visible : true },
      insertUnorderedList  : { visible : true },
      insertHorizontalRule : { visible : false },


      cut   : { visible : true },
      copy  : { visible : true },
      paste : { visible : true },
      html  : { visible: true },
      exam_html: { exec: function() { this.insertHtml('<abbr title="exam">Jam</abbr>') }, visible: true  }
    },
    events: {
      click : function(e)
      {
        if ($('#click-inform:checked').length > 0)
        {
          e.preventDefault();
          alert('You have clicked jWysiwyg content!');
        }
      }
    }
  });


  // ----------- datapicker ---------------
  
  $( "#frmdocsForm-vyveseno_od" ).datepicker();


});