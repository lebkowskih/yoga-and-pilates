import "./bootstrap";
import { Calendar } from "@fullcalendar/core";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import listPlugin from "@fullcalendar/list";
import interactionPlugin from "@fullcalendar/interaction";
import plLocale from "@fullcalendar/core/locales/pl";
import $ from "jquery";
import select2 from "select2/dist/js/select2";
import { TempusDominus, DateTime } from "@eonasdan/tempus-dominus";
import { Modal } from "bootstrap";
import toastr from "toastr";

window.Calendar = Calendar;
window.dayGridPlugin = dayGridPlugin;
window.timeGridPlugin = timeGridPlugin;
window.listPlugin = listPlugin;
window.interactionPlugin = interactionPlugin;
window.plLocale = plLocale;
window.$ = $;
select2(window, $);
window.TempusDominus = TempusDominus;
window.DateTime = DateTime;
window.Modal = Modal;
toastr.options = {
    "positionClass": "toast-bottom-right",
};
window.toastr = toastr;