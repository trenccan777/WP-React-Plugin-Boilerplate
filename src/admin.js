import React from 'react';
import ReactDOM from 'react-dom';
import SettingsApp from './admin/react-admin/App';
import MetaboxApp from './admin/react-cpt-metabox/App';

// eslint-disable-next-line no-unused-vars
import admin from './admin/scss/admin.scss';
// eslint-disable-next-line no-unused-vars
import reactAdmin from './admin/react-admin/scss/react-admin.scss';
// eslint-disable-next-line no-unused-vars
import reactCptMetabox from './admin/react-cpt-metabox/scss/react-cpt-metabox.scss';

document.addEventListener('DOMContentLoaded', () => {
  if (document.querySelector('#test-plugin-admin')) {
    ReactDOM.render(
      <SettingsApp />,
      document.querySelector('#test-plugin-admin'),
    );
  }
  if (document.querySelector('#test-plugin-cpt-metabox')) {
    ReactDOM.render(
      <MetaboxApp />,
      document.querySelector('#test-plugin-cpt-metabox'),
    );
  }
});

console.log('Hello admin');
