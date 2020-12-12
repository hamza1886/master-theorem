<?php
$tab = filter_input(INPUT_GET, 'tab', FILTER_VALIDATE_INT) ?: 1;
$a = filter_input(INPUT_GET, 'a', FILTER_VALIDATE_FLOAT);
$b = filter_input(INPUT_GET, 'b', FILTER_VALIDATE_INT);
$k = filter_input(INPUT_GET, 'k', FILTER_VALIDATE_INT);
$p = filter_input(INPUT_GET, 'p', FILTER_VALIDATE_INT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Master theorem provides an asymptotic analysis for recurrence relations that occur in the analysis of many divide and conquer algorithms.">
    <meta name="author" content="Hamza Rashid">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Master Theorem</title>
    <style>
        .a {
            color: #dc3545;
        }

        .b {
            color: #28a745;
        }

        .k {
            color: #ffc107;
        }

        .p {
            color: #17a2b8;
        }
    </style>
</head>
<body class="container">
<div class="h2 border-bottom my-3 pb-3">Master Theorem</div>
<p class="text-justify">Master theorem provides an asymptotic analysis (using Big O notation) for recurrence relations that occur in the analysis of many divide and conquer algorithms.
    The approach was first presented by Jon Bentley, Dorothea Haken, and James B. Saxe in 1980, where it was described as a "unifying method" for solving such recurrences.
    The name "master theorem" was popularized by the widely used algorithms textbook Introduction to Algorithms by Cormen, Leiserson, Rivest, and Stein.</p>

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-link <?= $tab === 1 ? 'active' : '' ?>" id="nav-tab-1" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="<?= $tab === 1 ? 'true' : 'false' ?>">Divide and Conquer<br/><code>T(n) = aT(n/b) + f(n)</code></a>
        <a class="nav-link <?= $tab === 2 ? 'active' : '' ?>" id="nav-tab-2" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="<?= $tab === 2 ? 'true' : 'false' ?>">Decrease and Conquer<br/><code>T(n) = aT(n - b) + f(n)</code></a>
        <a class="nav-link <?= $tab === 3 ? 'active' : '' ?>" id="nav-tab-3" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="<?= $tab === 3 ? 'true' : 'false' ?>">Exceptions</a>
    </div>
</nav>
<div class="tab-content my-3" id="nav-tabContent">
    <div class="tab-pane fade <?= $tab === 1 ? 'show active' : '' ?>" id="nav-1" role="tabpanel" aria-labelledby="nav-tab-1">
        <div class="h6">
            <div class="mb-3">Let <var class="a">a</var> &ge; 1 and <var class="b">b</var> > 1 be constants, let f(n) be a function, and let T(n) be a function over the positive numbers defined by the recurrence<br/>
                <span class="my-3 d-block">T(n) = <var class="a">a</var>T(n/<var class="b">b</var>) + f(n)</span>
                where<br/>
                <ul class="list-unstyled ml-5">
                    <li><var class="a">a</var> &ge; 1,</li>
                    <li><var class="b">b</var> > 1, and</li>
                    <li>f(n) = &#x398;(n<sup><var class="k">k</var></sup> log<sup><var class="p">p</var></sup> n), where <var class="k">k</var> &ge; 0 and <var class="p">p</var> &ge; 0</li>
                </ul>
            </div>

            <div class="mb-3">Case 1: If log<sub><var class="b">b</var></sub> <var class="a">a</var> > <var class="k">k</var> then &#x398;(n<sup>log<sub><var class="b">b</var></sub> <var class="a">a</var></sup>)</div>

            <div class="mb-3">Case 2: If log<sub><var class="b">b</var></sub> <var class="a">a</var> = <var class="k">k</var> then
                <ol class="ml-5" type="a">
                    <li>if <var class="p">p</var> > -1 then &#x398;(n<sup><var class="k">k</var></sup> log<sup><em class="p">p+1</em></sup> n)</li>
                    <li>if <var class="p">p</var> = -1 then &#x398;(n<sup><var class="k">k</var></sup> log log n)</li>
                    <li>if <var class="p">p</var> < -1 then &#x398;(n<sup><var class="k">k</var></sup>)</li>
                </ol>
            </div>

            <div class="mb-3">Case 3: If log<sub><var class="b">b</var></sub> <var class="a">a</var> < <var class="k">k</var> then
                <ol class="ml-5" type="a">
                    <li>if <var class="p">p</var> > 0 then &#x398;(n<sup><var class="k">k</var></sup> log<sup><var class="p">p</var></sup> n)</li>
                    <li>if <var class="p">p</var> &le; 0 then &#x398;(n<sup><var class="k">k</var></sup>)</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="tab-pane fade <?= $tab === 2 ? 'show active' : '' ?>" id="nav-2" role="tabpanel" aria-labelledby="nav-tab-2">
        <div class="h6">
            <div class="mb-3">Let <var class="a">a</var> > 0 and <var class="b">b</var> > 0 be constants, let f(n) be a function, and let T(n) be a function over the positive numbers defined by the recurrence<br/>
                <span class="my-3 d-block">T(n) = <var class="a">a</var>T(n - <var class="b">b</var>) + f(n)</span>
                where<br/>
                <ul class="list-unstyled ml-5">
                    <li><var class="a">a</var> > 0,</li>
                    <li><var class="b">b</var> > 0, and</li>
                    <li>f(n) = &#x398;(n<sup><var class="k">k</var></sup> log<sup><var class="p">p</var></sup> n), where <var class="k">k</var> &ge; 0 and <var class="p">p</var> &ge; 0</li>
                </ul>
            </div>

            <div class="mb-3">Case 1: If a < 1 then &#x398;(f(n)) = &#x398;(n<sup><var class="k">k</var></sup> log<sup><var class="p">p</var></sup> n)</div>
            <div class="mb-3">Case 2: If a = 1 then &#x398;(n * f(n)) = &#x398;(n<sup><em class="k">k+1</em></sup> log<sup><var class="p">p</var></sup> n)</div>
            <div class="mb-3">Case 3: If a > 1 then &#x398;(<var class="a">a</var><sup>n/<var class="b">b</var></sup> * f(n)) = &#x398;(<var class="a">a</var><sup>n/<var class="b">b</var></sup> n<sup><var class="k">k</var></sup> log<sup><var class="p">p</var></sup> n)</div>
        </div>
    </div>
    <div class="tab-pane fade <?= $tab === 3 ? 'show active' : '' ?>" id="nav-3" role="tabpanel" aria-labelledby="nav-tab-3">
        The following equations cannot be solved using the master theorem.
        <ul class="">
            <li><code>T(n) = 2<sup>n</sup> T(n/b) + f(n)</code>, a is not a constant; the number of subproblems should be fixed</li>
            <li><code>T(n) = 0.5 T(n/b) + f(n)</code>, a < 1 cannot have less than one sub problem</li>
            <li><code>T(n) = aT(n/b) - n<sup>2</sup> log(n)</code>, f(n), which is the combination time, is not positive</li>
            <li><code>T(n) = aT(n/b) + n(2 - cos n)</code>, f(n) does regularity violation</li>
        </ul>
    </div>
</div>

<div class="card mb-3" id="input-form-container" style="display: <?= $tab === 1 || $tab === 2 ? 'block' : 'none' ?>">
    <div class="card-header text-white bg-dark">Input values of <em>a</em>, <em>b</em>, <em>k</em> and <em>p</em></div>
    <div class="card-body">
        <form class="was-validated" id="input-form">
            <div class="form-group row">
                <label for="tab1" class="col-sm-3 col-form-label">Recurrence Relation<br/>where f(n) = &#x398;(n<sup><em>k</em></sup> log<sup><em>p</em></sup> n)</label>
                <div class="col-sm-9" style="padding-top: calc(.375rem + 1px); padding-bottom: calc(.375rem + 1px);">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="tab1" name="tab" value="1" class="custom-control-input" <?= $tab === 1 ? 'checked' : '' ?> required>
                        <label class="custom-control-label" for="tab1">T(n) = aT(n/b) + f(n)</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="tab2" name="tab" value="2" class="custom-control-input" <?= $tab === 2 ? 'checked' : '' ?> required>
                        <label class="custom-control-label" for="tab2">T(n) = aT(n - b) + f(n)</label>
                        <div class="invalid-feedback">This is a required field.</div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-3">
                    <label for="a" class="col-form-label"><em>a</em></label>
                    <input type="number" class="form-control" id="a" name="a" value="<?= isset($a) ? $a : '' ?>" min="<?= $tab === 1 ? 1 : 0.1 ?>" step="<?= $tab === 1 ? 1 : 0.1 ?>" placeholder="a" required autofocus>
                    <div class="invalid-feedback">This is a required field.</div>
                </div>

                <div class="form-group col-sm-3">
                    <label for="b" class="col-form-label"><em>b</em></label>
                    <input type="number" class="form-control" id="b" name="b" value="<?= isset($b) ? $b : '' ?>" min="<?= $tab === 1 ? 2 : 1 ?>" step="1" placeholder="b" required>
                    <div class="invalid-feedback">This is a required field.</div>
                </div>

                <div class="form-group col-sm-3">
                    <label for="k" class="col-form-label"><em>k</em></label>
                    <input type="number" class="form-control" id="k" name="k" value="<?= isset($k) ? $k : '0' ?>" placeholder="k" required>
                    <div class="invalid-feedback">This is a required field.</div>
                </div>

                <div class="form-group col-sm-3">
                    <label for="p" class="col-form-label"><em>p</em></label>
                    <input type="number" class="form-control" id="p" name="p" value="<?= isset($p) ? $p : '0' ?>" placeholder="p" required>
                    <div class="invalid-feedback">This is a required field.</div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                <button type="button" class="btn btn-warning" id="reset">Reset</button>
            </div>
        </form>
    </div>
    <?php if (isset($a) || isset($b) || isset($k) || isset($p)) {
        if ($a == intval($a)) $a = intval($a); ?>
        <div class="card-footer">
            <div class="h6">
                <div class="equation">Recurrence:
                    <?php
                    $equation = '';
                    $equation = 'T(n) = ';
                    if (isset($a) && $a !== 1) $equation .= $a;
                    $equation .= 'T(n';
                    if (isset($b)) {
                        if ($tab === 1 && $b !== 1) $equation .= '/' . $b;
                        elseif ($tab === 2) $equation .= ' - ' . $b;
                    }
                    $equation .= ')';
                    if (isset($k) || isset($p)) {
                        $equation .= ' + ';

                        if ($k < 0 && $p < 0) {
                            $equation .= '1/(';
                            $equation .= (abs($k) === 1 ? 'n' : 'n<sup>' . abs($k) . '</sup>') . ' ' . (abs($p) === 1 ? 'log n' : 'log<sup>' . abs($p) . '</sup> n');
                            $equation .= ')';
                        } elseif ($k === 0 && $p === 0) {
                            $equation .= '1';
                        } else {
                            if ($k === 1) $equation .= 'n';
                            elseif ($k > 1) $equation .= 'n<sup>' . $k . '</sup>';

                            if ($k < 1 && $k !== 0 && $p !== 0) $equation .= '(';
                            elseif ($k >= 1 && $p > 0) $equation .= ' ';

                            if ($p === 1) $equation .= 'log n';
                            elseif ($p > 1) $equation .= 'log<sup>' . $p . '</sup> n';

                            if ($k < 1 && $k !== 0 && $p !== 0) $equation .= ')';

                            if ($k < 1 && $k !== 0) $equation .= ($p === 0 ? '1/' : '/') . (abs($k) === 1 ? 'n' : 'n<sup>' . abs($k) . '</sup>');
                            if ($p < 1 && $p !== 0) $equation .= ($k === 0 ? '1/' : '/') . (abs($p) === 1 ? 'log n' : 'log<sup>' . abs($p) . '</sup> n');
                        }
                    }
                    echo $equation; ?>
                </div>

                <div class="complexity">Complexity:
                    <?php $log_val = log($a, $b);
                    if ($log_val == intval($log_val)) $log_val = intval($log_val);

                    if ($tab === 1) {
                        if ($log_val > $k) { ?>
                            <?php if (is_int($log_val)) { ?>
                                <span>&#x398;(<?= $log_val === 0 ? '1' : 'n' . ($log_val === 1 ? '' : '<sup>' . $log_val . '</sup>') ?>)</span>
                            <?php } else { ?>
                                <span>&#x398;(n<sup>log<sub><?= $b ?></sub><?= $a ?></sup>)</span>
                            <?php } ?>
                            <span class="badge badge-info">Case 1</span>
                        <?php } elseif ($log_val === $k) {
                            if ($p > -1) { ?>
                                <span>&#x398;(<?= $k === 0 ? '' : ($k === 1 ? 'n ' : 'n<sup>' . $k . '</sup>') . ' ' ?><?= $p === 0 ? 'log n' : 'log<sup>' . ($p + 1) . '</sup> n' ?>)</span>
                                <span class="badge badge-info">Case 2a</span>
                            <?php } elseif ($p === -1) { ?>
                                <span>&#x398;(<?= $k === 0 ? '' : ($k === 1 ? 'n ' : 'n<sup>' . $k . '</sup>') . ' ' ?>log log n)</span>
                                <span class="badge badge-info">Case 2b</span>
                            <?php } elseif ($p < -1) { ?>
                                <span>&#x398;(<?= $k === 0 ? '1' : ($k === 1 ? 'n' : 'n<sup>' . $k . '</sup>') . '' ?>)</span>
                                <span class="badge badge-info">Case 2c</span>
                            <?php } ?>
                        <?php } elseif ($log_val < $k) {
                            if ($p > 0) { ?>
                                <span>&#x398;(<?= $k === 0 ? '' : ($k === 1 ? 'n ' : 'n<sup>' . $k . '</sup>') . ' ' ?><?= $p === 1 ? 'log n' : 'log<sup>' . $p . '</sup> n' ?>)</span>
                                <span class="badge badge-info">Case 3a</span>
                            <?php } elseif ($p <= 0) { ?>
                                <span>&#x398;(<?= $k === 0 ? '1' : ($k === 1 ? 'n' : 'n<sup>' . $k . '</sup>') . '' ?>)</span>
                                <span class="badge badge-info">Case 3b</span>
                            <?php } ?>
                        <?php } ?>
                        <code class="badge badge-success">T(n) = aT(n/b) + f(n)</code>
                    <?php } elseif ($tab === 2) {
                        if ($a < 1) {
                            if ($k === 0 && $p === 0) { ?>
                                <span>&#x398;(1)</span>
                            <?php } else { ?>
                                <span>&#x398;(<?= ($k === 0 ? '' : ($k === 1 ? 'n' : 'n<sup>' . $k . '</sup>')) . ($k !== 0 && $p === 0 || $k === 0 && $p !== 0 ? '' : ' ') . ($p === 0 ? '' : ($p === 1 ? 'log n' : 'log<sup>' . $p . '</sup> n')) ?>)</span>
                            <?php } ?>
                            <span class="badge badge-info">Case 1</span>
                        <?php } elseif ($a === 1) {
                            if ($k === -1 && $p === 0) { ?>
                                <span>&#x398;(1)</span>
                            <?php } elseif ($k === 0 && $p === 0) { ?>
                                <span>&#x398;(n)</span>
                            <?php } else { ?>
                                <span>&#x398;(<?= ($k === -1 ? '' : ($k === 0 ? 'n' : 'n<sup>' . ($k + 1) . '</sup>')) . ($k !== -1 && $p === 0 || $k === -1 && $p !== 0 ? '' : ' ') . ($p === 0 ? '' : ($p === 1 ? 'log n' : 'log<sup>' . $p . '</sup> n')) ?>)</span>
                            <?php } ?>
                            <span class="badge badge-info">Case 2</span>
                        <?php } elseif ($a > 1) {
                            if ($k === 0 && $p === 0) { ?>
                                <span>&#x398;(<?= $a ?><sup>n<?= $b === 1 ? '' : '/' . $b ?></sup>)</span>
                            <?php } else { ?>
                                <span>&#x398;(<?= $a ?><sup>n<?= $b === 1 ? '' : '/' . $b ?></sup> <?= ($k === 0 ? '' : ($k === 1 ? 'n' : 'n<sup>' . $k . '</sup>')) . ($k !== 0 && $p === 0 || $k === 0 && $p !== 0 ? '' : ' ') . ($p === 0 ? '' : ($p === 1 ? 'log n' : 'log<sup>' . $p . '</sup> n')) ?>)</span>
                            <?php } ?>
                            <span class="badge badge-info">Case 3</span>
                        <?php } ?>
                        <code class="badge badge-success">T(n) = aT(n - b) + f(n)</code>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script type="text/javascript">
    (function ($) {
        const inputForm = $('#input-form');
        const inputFormContainer = $('#input-form-container');

        $('#nav-tab-1, #nav-tab-2').on('click', function (e) {
            inputFormContainer.slideDown();
        });

        $('#nav-tab-3').on('click', function (e) {
            inputFormContainer.slideUp();
        });

        $('[name=tab]').on('click', function (e) {
            const a = $('#a');
            const b = $('#b');
            const tab = $(this).filter(':checked').val();
            if (tab === '1') {
                a.attr('min', 1);
                a.attr('step', 1);
                b.attr('min', 2);
            } else if (tab === '2') {
                a.attr('min', 0.1);
                a.attr('step', 0.1);
                b.attr('min', 1);
            }
        });

        $('input[type=text], input[type=number]').on('input', function (e) {
            inputForm.addClass('was-validated');
        });

        $('#submit').on('click', function (e) {
            inputForm.addClass('was-validated');
        });

        $('#reset').on('click', function (e) {
            e.preventDefault();
            inputForm.removeClass('was-validated');
            inputForm.trigger('reset');
            inputForm.find('input').val('');
            $('[name=tab]').prop('checked', false);
        });
    })(jQuery);
</script>
</body>
</html>