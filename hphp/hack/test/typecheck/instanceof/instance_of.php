<?hh // partial
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the "hack" directory of this source tree.
 *
 *
 */

function foo($x, $y): void {
  if($x instanceof $y[0]) {
  } else if ($x instanceof $y->bla) {
  } else if ($x instanceof ($y->blah())) {
  }
}
