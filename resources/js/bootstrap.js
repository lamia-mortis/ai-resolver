'use strict';

import _, { words } from 'lodash';
window._ = _;

import axios from 'axios';
window.axios = axios.create({
  headers: {
    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
    'X-Requested-With': 'XMLHttpRequest',
  },
});
