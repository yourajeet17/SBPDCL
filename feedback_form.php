<!doctype html>
<html lang="en">
<?php include 'header.php';?>
<body>
    <main>
    <style>
    .star-rating {
        line-height: 32px;
        font-size: 1.25em;
    }

    .star-rating .fa-star {
        color: #e33e32;
    }
   





.container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

.item {
  width: 60px;
  height: 60px;
  display: flex;
  justify-content: center;
  align-items: center;
  user-select: none;
}
.radio {
  display: none;
}
.radio ~ span {
  font-size: 3rem;
  filter: grayscale(100);
  cursor: pointer;
  transition: 0.3s;
}

.radio:checked ~ span {
  filter: grayscale(0);
  font-size: 4rem;
}

    </style>

        <section class="Payment-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">

                    <div class=" container-fluid mx-auto">
                        <form class="custom-form Payment-form" action="#" method="get" role="form">
                            <h3 class="mb-4" style="text-align : center; text-shadow: 2px 2px #e65d4e;}">Feedback Form
                            </h3>

                            <div class="row">

                                <div class="container">
                                    <div class="row">

                                        <div class="col-lg-12  m-2 star-rating">
                                            <span class="mx-1">How is our Website permformance?
                                            </span>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">1&nbsp;<i
                                                        class="bi bi-star"></i></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">2&nbsp;<i
                                                        class="bi bi-star"></i></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">3&nbsp;<i
                                                        class="bi bi-star"></i></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">4&nbsp;<i
                                                        class="bi bi-star"></i></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">5&nbsp;<i
                                                        class="bi bi-star"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">

                                        <div class="col-lg-12  m-2 star-rating">
                                            <span class="mx-1">How is user interface?
                                            </span>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">1&nbsp;<i
                                                        class="bi bi-star"></i></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">2&nbsp;<i
                                                        class="bi bi-star"></i></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">3&nbsp;<i
                                                        class="bi bi-star"></i></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">4&nbsp;<i
                                                        class="bi bi-star"></i></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">5&nbsp;<i
                                                        class="bi bi-star"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">

                                        <div class="col-lg-12  m-2 star-rating">
                                            <span class="mx-1">How is Electricity cut down in your area?
                                            </span>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">1&nbsp;<i
                                                        class="bi bi-star"></i></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">2&nbsp;<i
                                                        class="bi bi-star"></i></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">3&nbsp;<i
                                                        class="bi bi-star"></i></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">4&nbsp;<i
                                                        class="bi bi-star"></i></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">5&nbsp;<i
                                                        class="bi bi-star"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                             
                              
                                <div class="container">
                                    <div class="row">

                                        <div class="col-lg-12  m-2">
                                            <div class="star-rating">
                                                <span class="mx-1">How many times have faced problems?
                                                </span>

                                                <span class="fa fa-star-o" data-rating="1">&nbsp;&nbsp;</span>
                                                <span class="fa fa-star-o" data-rating="2">&nbsp;&nbsp;</span>
                                                <span class="fa fa-star-o" data-rating="3">&nbsp;&nbsp;</span>
                                                <span class="fa fa-star-o" data-rating="4">&nbsp;&nbsp;</span>
                                                <span class="fa fa-star-o" data-rating="5">&nbsp;&nbsp;</span>
                                                <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">

                                        <div class="col-lg-12  m-2">
                                            <div class="app">
                                                <h5 class = "m-3">Was this page helpful?</h5>
                                              

                                                <div class="container">
                                                    <div class="item">
                                                        <label for="0">
                                                            <input class="radio" type="radio" name="feedback" id="0"
                                                                value="0">
                                                            <span>🤬&nbsp;&nbsp;</span>
                                                        </label>
                                                    </div>

                                                    <div class="item">
                                                        <label for="1">
                                                            <input class="radio" type="radio" name="feedback" id="1"
                                                                value="1">
                                                            <span>🙁&nbsp;&nbsp;</span>
                                                        </label>
                                                    </div>

                                                    <div class="item">
                                                        <label for="2">
                                                            <input class="radio" type="radio" name="feedback" id="2"
                                                                value="2">
                                                            <span>😶&nbsp;&nbsp;</span>
                                                        </label>
                                                    </div>

                                                    <div class="item">
                                                        <label for="3">
                                                            <input class="radio" type="radio" name="feedback" id="3"
                                                                value="3">
                                                            <span>😁&nbsp;&nbsp;</span>
                                                        </label>
                                                    </div>

                                                    <div class="item">
                                                        <label for="4">
                                                            <input class="radio" type="radio" name="feedback" id="4"
                                                                value="4">
                                                            <span>😍&nbsp;&nbsp;</span>
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <button type="submit" class="form-control mt-4">Submit</button>
                            </div>
                    </div>
                    </form>
                </div>

            </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'?>
<script>
    var $star_rating = $('.star-rating .fa');

    var SetRatingStar = function() {
        return $star_rating.each(function() {
            if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data(
                    'rating'))) {
                return $(this).removeClass('fa-star-o').addClass('fa-star');
            } else {
                return $(this).removeClass('fa-star').addClass('fa-star-o');
            }
        });
    };

    $star_rating.on('click', function() {
        $star_rating.siblings('input.rating-value').val($(this).data('rating'));
        return SetRatingStar();
    });

    SetRatingStar();
    $(document).ready(function() {

    });
    </script>

</body>

</html>