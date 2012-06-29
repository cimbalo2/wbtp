(* ========================================================================= *)
(* Some examples illustrating how the theorem-proving code can be used.      *)
(*                                                                           *)
(* Copyright (c) 2003-2007, John Harrison. (See "LICENSE.txt" for details.)  *)
(* ========================================================================= *)

include Atp_batch;;
(*include Format;;*)

print_string "Starting examples\n";;

(* ------------------------------------------------------------------------- *)
(* Printer for formulas, to give feedback when not using toplevel.           *)
(* ------------------------------------------------------------------------- *)

let print_formula fm = print_qformula print_atom fm; print_newline();;

#use "user.ml";;
